<?php
require_once 'RequestTracker.php';

$url = "http://rt.example.com";
$user = "user";
$pass = "password";

$rt = new RequestTracker($url, $user, $pass);

//Get the properties of an existing ticket, given the ID
/*
$response = $rt->getTicketProperties(1);
*/
//Create a new ticket- see http://requesttracker.wikia.com/wiki/REST#Ticket_Create for all fields
/*
$content = array(
    'Queue'=>'General',
    'Requestor'=>'test@example.com',
    'Subject'=>'Lorem Ipsum',
    'Text'=>'dolor sit amet'
);
$response = $rt->createTicket($content);
print_r($response);
 */

//Edit a ticket
/*
$content = array(
    'Priority'=>5
);
$response = $rt->editTicket(3, $content);
print_r($response);
*/

//Reply to a ticket
/*
$content = array(
    'Text'=>'This is a test reply.'
);
$response = $rt->doTicketReply(3, $content);
print_r($response);
*/

//Comment on a ticket
/*
$content = array(
    'Text'=>'This is a test comment.'
);
$response = $rt->doTicketComment(3, $content);
print_r($response);
 */

//Ticket Links
/*
$content = array(
    'DependsOn'=>1
);

$response = $rt->editTicketLinks(3, $content);
print_r($response);
$response = $rt->getTicketLinks(3);
print_r($response);
*/

//Attachment management
/*
$response = $rt->getTicketAttachments(3);
print_r($response);
$response = $rt->getAttachment(3, 13);
print_r($response);
$response = $rt->getAttachmentContent(3, 13);
print_r($response);
 */

//Ticket History
/*
$response = $rt->getTicketHistory(3);
print_r($response);
$response = $rt->getTicketHistoryNode(3, 44);
print_r($response);
 */

//Search demonstration
//Unowned tickets ordered by Created date descending
/*
$response = $rt->search("Owner='Nobody'",'-Created');
print_r($response);
*/
?>