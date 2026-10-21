<?php

function addRequests($reqDate, $roomNumber, $reqBy, $repairDesc, $reqPriority)
{
    global $db;

    $query = "INSERT INTO request VALUES (:reqDate, :roomNumber, :reqBy, :repairDesc, :reqPriority)";
    $statement = $db->prepare($query);
    $statement->bindValue(':reqDate', $reqDate);
    $statement->bindValue(':roomNumber', $roomNumber);
    $statement->bindValue(':reqBy', $reqBy);
    $statement->bindValue(':repairDesc', $repairDesc);
    $statement->bindValue(':reqPriority', $reqPriority);
    $statement->execute();

    $res = $statement->fetchAll();
    $statement->closeCursor();

    return $res;

}

function getAllRequests()
{
    global $db;

    $query = "SELECT * FROM requests";
    $statement = $db->prepare($query);
    $statement->execute();
    $res = $statement->fetchAll(); // fetch() just gets one row
    $statement->closeCursor();

    return $res;
}

function getRequestById($id)  
{
    global $db;

    $query = "SELECT * FROM requests WHERE reqId = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $res = $statement->fetchAll(); // fetch() just gets one row
    $statement->closeCursor();

    return $res;
}

function updateRequest($reqId, $reqDate, $roomNumber, $reqBy, $repairDesc, $reqPriority)
{
    global $db;

    $query = "UPDATE requests SET reqDate=:reqDate, roomNumber=:roomNumber ... 
              WHERE reqId=:reqId";
    $statement = $db->prepare($query);

    // bind the values here
    $statement->bindValue(':id', $id);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $res = $statement->fetchAll(); // fetch() just gets one row
    $statement->closeCursor();
    
}

function deleteRequest($reqId)
{

    
}

?>
