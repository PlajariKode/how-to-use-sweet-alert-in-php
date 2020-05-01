<!DOCTYPE html>
<html>
<head>
	<title>Sweet Alert 2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

	<table>
		<tr>
			<td><button class="btn btn-primary" onclick="basic()">Basic</button></td>
			<td><button class="btn btn-primary" onclick="titleWithText()">Icon, judul dan text</button></td>
			<td><button class="btn btn-primary" onclick="titleIconTextFooter()">Judul dengan icon, text dan footer</button></td>
			<td><button class="btn btn-primary" onclick="buttonWithAriaLabel()">Menampilkan tombol dengan ARIA label</button></td>
			<td><button class="btn btn-primary" onclick="customPositionDialog()">Posisi dialog custom</button></td>
			<td><button class="btn btn-primary" onclick="confirmDialogWithConfirmButton()">Klik <b>Yes</b> maka muncul dialog konfirmasi</button></td>
		</tr>
	</table>

	<script type="text/javascript">

		function basic() 
		{		
			Swal.fire('Any fool can use a computer')	
		}

		function titleWithText() 
		{
			Swal.fire(
				'Ini judul',
				'Ini text dibawah judul',
				'question'
			)
		}

		function titleIconTextFooter()
		{
			Swal.fire({
			  type: 'error',
			  title: 'Oops...',
			  text: 'Something went wrong!',
			  footer: '<a href>Ini footer!</a>'
			})
		}

		function buttonWithAriaLabel()
		{
			Swal.fire({
				title: '<strong>HTML <u>example</u></strong>',
				type: 'info',
				html:
				'You can use <b>bold text</b>, ' +
				'<a href="//sweetalert2.github.io">links</a> ' +
				'and other HTML tags',
				showCloseButton: true,
				showCancelButton: true,
				focusConfirm: false,
				confirmButtonText:
				'<i class="fa fa-thumbs-up"></i> Great!',
				confirmButtonAriaLabel: 'Thumbs up, great!',
				cancelButtonText:
				'<i class="fa fa-thumbs-down"></i>',
				cancelButtonAriaLabel: 'Thumbs down'
			})
		}

		function customPositionDialog()
		{
			Swal.fire({
				position: 'top-end',
				type: 'success',
				title: 'Posisi pojok kanan atas',
				showConfirmButton: false,
				timer: 1500
			})
		}

		function confirmDialogWithConfirmButton()
		{
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.value) {
					Swal.fire(
						'Deleted!',
						'Your file has been deleted.',
						'success'
						)
				}
			})
		}

	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

</body>
</html>