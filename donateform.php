<!DOCTYPE html>
<html>
    <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Payment Form</title>    
   <link rel="stylesheet" href="donate.css">
        </head>
    <body>
    <form action="pay.php" method="post">
    <div class="shade">
		<div class="blackboard">
				<div class="form">
						<p>
								<label>Name:</label>&nbsp;&nbsp;
								<input type="text" name="fname"/>
						</p>
						<p>
								<label>Email:</label>&nbsp;&nbsp;&nbsp;
								<input type="text" name="email"/>
						</p>
						<p>
								<label>Phone:</label>&nbsp;&nbsp;
								<input type="tel" name="phone"/>
						</p>
						<p>
								<label>Price:</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="price">						
                            </p>
						<p class="wipeout">
								<input type="submit" name="submit" value="Proceed to Pay" />
						</p>
				</div>
		</div>
</div>
        </form>    
    </body>
    </html>