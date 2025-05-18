<!DOCTYPE html>
<html>
<head>
    <title>BOOKING PAGE</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f0f8ff;
        }
        form {
            background-color: skyblue;
            padding: 20px;
            width: 500px;
            margin: auto;
            border-radius: 10px;
        }
        table {
            width: 100%;
        }
        th {
            text-align: left;
            padding-right: 10px;
        }
    </style>
    <script src="script.js"></script>
</head>
<body style="background-color: rgb(22, 66, 119);">
    
    <form onsubmit="return validateForm()" action="insert.php">
        <h2 align="center">BOOKING CENTRE</h2>
        <table>
            <tr><th>Name:</th><td><input type="text" placeholder="Enter your name" name=name required /></td></tr>
            <tr><th>Phone:</th><td><input type="text" id="phone" placeholder="+91XXXXXXXXXX" name=ph required /></td></tr>
            <tr><th>Email:</th><td><input type="text" id="email" placeholder="e.g. abc@mail.com" name=eml required /></td></tr>
            <tr><th>Date of Birth:</th><td><input type="date" name=dob required /></td></tr>
            <tr><th>Gender:</th>
                <td>
                    <input type="radio" name=g value=Male required />Male
                    <input type="radio" name=g value=Female required />Female
                </td>
            </tr>
            <tr><th>Water Tanker</th>
                <td>
                    <select name=s required>
                        <option value="">--Select--</option>
                        <option>Extra Small Tanker</option>
                        <option>Small Tanker</option>
                        <option>Medium Tanker</option>
                        <option>Large Tanker</option>
                        <option>Extra Large Tanker<option>
                    </select>
                </td>
            </tr>
            <tr><th>Address:</th><td><textarea rows="3" cols="20" name=addd required></textarea></td></tr>
            <tr><th>Delivery Time:</th>
                <td>
                    <input type="radio" name="dt" value="8a.m.-10a.m.">8a.m.-10a.m.<br>
                    <input type="radio" name="dt" value="11a.m.-1p.m.">11a.m.-1p.m.<br>
                    <input type="radio" name="dt" value="2p.m.-4p.m.">2p.m.-4p.m.<br>
                    <input type="radio" name="dt" value="5p.m.-7p.m.">5p.m.-7p.m.
                </td>
            </tr>
            
            
            
            
            <tr><th>Pin Code:</th><td><input type="text" id="pincode" placeholder="e.g. 500011" name=pc required /></td></tr>
            <tr><th>Reviews:</th><td><textarea rows="3" cols="20" name=rvs required></textarea></td></tr>
            <tr><td colspan="2" align="center"><input type="Submit" /></td></tr>
            <tr><td colspan="2" align="center"><input type="Reset" /></td></tr>
            <tr><th>Start Time:</th><td  onload="showdate()" required>
            
	<?php
		date_default_timezone_set("Asia/Kolkata");
		echo '<p id="server-date"> '.date("h:i:sa").'</p>' ;

	?>
        </td>
    </tr>
        </table>
    </form>
    
</body>
</html>