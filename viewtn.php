<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
  font-family: sans-serif; /* Change your font family */
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #000a08;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}

.btn{
  height: 50px;
  padding-top: 10px;
  padding-right: 10px;
}
button{
  float: right;


  background-color: #000a08;
  color: white;
 
}
</style>

<body>
<div class="btn">
  <a class="fcc-btn" href="export.php"><button>export</button></a> 
</div>
    <table class="content-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>MOBILE NUMBER</th>
            <th>CITY NAME</th>
            <th>PRODUCTS</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
                      include('connect.php');
                      $query = "SELECT * FROM tn order by ID asc";
											$result = mysqli_query($conn,$query);
											while($row = mysqli_fetch_assoc($result))
											{
											
											?>
                    <tr>  
											<td><?php echo $row ['ID']?></td>
											<td><?php echo $row ['Name']?></td>
                      <td><?php echo $row ['Phone']?></td>
                      <td><?php echo $row ['City']?></td>
                      <td><?php echo $row ['Products']?></td>
                     

          </tr>
          <?php } ?>
        </tbody>
      </table>
</body>
</html>