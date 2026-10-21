<?php
function addRequests($reqDate, $roomNumber, $reqBy, $repairDesc, $reqPriority)
{


}

function getAllRequests()
{
   global $db;

   $query = "SELECT * FROM requests"
   $statement = $db->prepare($query)
   $statement->execute()
   $res = $statement->fetchAll() // fetch() just gets one row
   

}

function getRequestById($id)  
{
    

}

function updateRequest($reqId, $reqDate, $roomNumber, $reqBy, $repairDesc, $reqPriority)
{


}

function deleteRequest($reqId)
{

    
}

?>
