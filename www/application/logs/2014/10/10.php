<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-10 09:47:09 --- CRITICAL: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2014-10-10 09:47:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'Z:\home\karpaty...', 243, Array)
#1 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 36080080, 'Unable to find ...', 5)
#2 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 Z:\home\karpaty\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 Z:\home\karpaty\www\application\classes\Controller\Frontend\contacts.php(23): Email::send('mordastuy@gmail...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Contacts->action_send()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-10-10 09:56:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\Frontend\v_base_frontend.php [ 131 ] in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:131
2014-10-10 09:56:51 --- DEBUG: #0 Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php(131): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\karpaty...', 131, Array)
#1 Z:\home\karpaty\www\system\classes\Kohana\View.php(61): include('Z:\home\karpaty...')
#2 Z:\home\karpaty\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\karpaty...', Array)
#3 Z:\home\karpaty\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#7 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\karpaty\www\application\views\Frontend\v_base_frontend.php:131
2014-10-10 10:32:03 --- CRITICAL: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2014-10-10 10:32:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'Z:\home\karpaty...', 243, Array)
#1 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 108319792, 'Unable to find ...', 5)
#2 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 Z:\home\karpaty\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 Z:\home\karpaty\www\application\classes\Controller\Frontend\contacts.php(41): Email::send('mordastuy@gmail...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Contacts->action_send()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-10-10 10:35:14 --- CRITICAL: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:587 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2014-10-10 10:35:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'Z:\home\karpaty...', 243, Array)
#1 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 587, 36095632, 'Unable to find ...', 5)
#2 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 Z:\home\karpaty\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 Z:\home\karpaty\www\application\classes\Controller\Frontend\contacts.php(41): Email::send('mordastuy@gmail...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Contacts->action_send()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-10-10 10:41:11 --- CRITICAL: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:25 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2014-10-10 10:41:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'Z:\home\karpaty...', 243, Array)
#1 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 25, 80587360, 'Unable to find ...', 5)
#2 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 Z:\home\karpaty\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 Z:\home\karpaty\www\application\classes\Controller\Frontend\contacts.php(41): Email::send('mordastuy@gmail...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Contacts->action_send()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-10-10 10:41:41 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530 5.7.0 Must issue a STARTTLS command first. w8sm1916980lal.41 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2014-10-10 10:41:41 --- DEBUG: #0 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530 5.7.0 Must ...', Array)
#1 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <koh...', Array, Array)
#2 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <koh...', Array)
#3 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('kohanaframework...')
#4 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'kohanaframework...', Array, Array)
#5 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'kohanaframework...', Array, Array)
#6 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 Z:\home\karpaty\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 Z:\home\karpaty\www\application\classes\Controller\Frontend\contacts.php(41): Email::send('mordastuy@gmail...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#9 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Contacts->action_send()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2014-10-10 10:48:52 --- CRITICAL: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://ssl://smtp.gmail.com:465 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2014-10-10 10:48:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'Z:\home\karpaty...', 243, Array)
#1 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://ssl://smt...', 465, 110003480, 'Unable to find ...', 5)
#2 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 Z:\home\karpaty\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 Z:\home\karpaty\www\application\classes\Controller\Frontend\contacts.php(41): Email::send('mordastuy@gmail...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Contacts->action_send()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-10-10 11:08:22 --- CRITICAL: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2014-10-10 11:08:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'Z:\home\karpaty...', 243, Array)
#1 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 77446920, 'Unable to find ...', 5)
#2 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 Z:\home\karpaty\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 Z:\home\karpaty\www\application\classes\Controller\Frontend\contacts.php(41): Email::send('mordastuy@gmail...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Contacts->action_send()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-10-10 11:11:57 --- CRITICAL: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2014-10-10 11:11:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'Z:\home\karpaty...', 243, Array)
#1 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 104634424, 'Unable to find ...', 5)
#2 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 Z:\home\karpaty\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 Z:\home\karpaty\www\application\classes\Controller\Frontend\contacts.php(41): Email::send('mordastuy@gmail...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Contacts->action_send()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-10-10 11:30:15 --- CRITICAL: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2014-10-10 11:30:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'Z:\home\karpaty...', 243, Array)
#1 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 74553616, 'Unable to find ...', 5)
#2 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 Z:\home\karpaty\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 Z:\home\karpaty\www\application\classes\Controller\Frontend\contacts.php(41): Email::send('mordastuy@gmail...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#7 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Contacts->action_send()
#8 [internal function]: Kohana_Controller->execute()
#9 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#10 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-10-10 11:37:16 --- CRITICAL: Swift_TransportException [ 0 ]: Expected response code 250 but got code "530", with message "530-5.5.1 Authentication Required. Learn more at
530 5.5.1 http://support.google.com/mail/bin/answer.py?answer=14257 l1sm517953lag.42 - gsmtp
" ~ MODPATH\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php [ 416 ] in Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300
2014-10-10 11:37:16 --- DEBUG: #0 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(300): Swift_Transport_AbstractSmtpTransport->_assertResponseCode('530-5.5.1 Authe...', Array)
#1 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(207): Swift_Transport_AbstractSmtpTransport->executeCommand('MAIL FROM: <koh...', Array, Array)
#2 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\EsmtpTransport.php(277): Swift_Transport_EsmtpTransport->executeCommand('MAIL FROM: <koh...', Array)
#3 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(451): Swift_Transport_EsmtpTransport->_doMailFromCommand('kohanaframework...')
#4 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(487): Swift_Transport_AbstractSmtpTransport->_doMailTransaction(Object(Swift_Message), 'kohanaframework...', Array, Array)
#5 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(178): Swift_Transport_AbstractSmtpTransport->_sendTo(Object(Swift_Message), 'kohanaframework...', Array, Array)
#6 Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Mailer.php(87): Swift_Transport_AbstractSmtpTransport->send(Object(Swift_Message), Array)
#7 Z:\home\karpaty\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#8 Z:\home\karpaty\www\application\classes\Controller\Frontend\contacts.php(41): Email::send('mordastuy@gmail...', 'kohanaframework...', '???????????????...', '???????????????...', false)
#9 Z:\home\karpaty\www\system\classes\Kohana\Controller.php(84): Controller_Frontend_Contacts->action_send()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\karpaty\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Frontend_Contacts))
#12 Z:\home\karpaty\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\karpaty\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\karpaty\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\karpaty\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php:300