function sendEmail() {
	Email.send({
	Host: "smtp.gmail.com",
	Username : "<sender’s email address>",
	Password : "<email password>",
	To : '<recipient’s email address>',
	From : "<sender’s email address>",
	Subject : "<email subject>",
	Body : "<email body>",
	}).then(
		message => alert("mail sent successfully")
	);
}

//You can also send mails to multiple users. For that the you need to use the ‘TO’ property which can be an array instead of a single entry

/*function sendEmail() {
	Email.send({
	Host: "smtp.gmail.com",
	Username : "Your Gmail Address",
	Password : "Your Gmail Password",
	To : 'recipient_1_email_address, recipient_2_email_address',
	From : "sender’s email address",
	Subject : "email subject",
	Body : "email body",
	}).then(
		message => alert("mail sent successfully")
	);
}


//You can also send emails with attachments. Use the following code for sending attachments in email

function sendEmail() {
  Email.send({
  Host: "smtp.gmail.com",
  Username : "Your Gmail Address",
  Password : "Your Gmail Password",
  To : 'recipient’s email address',
  From : "sender’s email address",
  Subject : "email subject",
  Body : "email body",
  Attachments : [
  	{
  		name : "smtpjs.png",
  		path:"https://networkprogramming.files.wordpress.com/2017/11/smtpjs.png"
  	}]
  }).then(
  	message => alert("mail sent successfully")
  );
}
*/