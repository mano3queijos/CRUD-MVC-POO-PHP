<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
	crossorigin="anonymous">

<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
	integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
	crossorigin="anonymous">
<link rel="stylesheet" href="Style.css">
</head>
<body>
    


	<div class="container">
		<div class="d-flex justify-content-center">



			<div class="table-responsive col col-md-12 mx-auto">


				<table class="table table-hover table-bordered w-75 mx-auto"
					style="font-size: 18px;">

					<thead class="table-dark">

						<tr>							
                            <th class="text-center" scope="col">ID'</th>
							<th class="text-center" scope="col">Nome</th>
							<th class="text-center" scope="col">Email</th>
							<th class="text-center" scope="col">Telefone</th>
						</tr>

					</thead>

					<tbody>


                    <?php foreach($resultData as $data):?>

							<tr>
                            <td class="text-center"> <?= $data['id']?></td>
                            <td class="text-center"> <?= $data['name']?></td>
                            <td class="text-center"> <?= $data['email']?></td>
                            <td class="text-center"> <?= $data['phone']?></td>
								
							</tr>
 
                            <?php endforeach; ?>

					</tbody>




				</table>



				<div class="col col-md-12  w-75 mx-auto pb-4">


					<div class="form-group">
						<label class="col-md-2 control-label" for="prosseguir"></label>
						<div>
							<a href="#">

								<button type="submit" name="prosseguir" class="btn btn-success"
									type="Submit">Voltar Para Menu Inicial</button>


							</a>
						
						</div>
					</div>


				</div>


			</div>
		</div>



	</div>

    
<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
		crossorigin="anonymous"></script>
</body>
</html>