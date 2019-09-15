<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Greeting</title>
    <link rel="stylesheet" href="https://www.script-tutorials.com/demos/360/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div>
<div class="stars"></div>
<div class="twinkling">
<div class="container" style="z-index: 100;">
        <div class="row justify-content-md-center align-items-center" style="margin-top: 10em;">
            <div class="col-md-6" id="form-view">
                <form action="">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Masukan nama anda" id="name">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-block" id="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6" id="greeting" style="display: none;">
                <div class="text-center">
                    <h1 id="greeting-text" style="font-size: 5em; color: white;"></h1>
                    <h2 id="name-tf" style="font-size: 5em; color: white;"></h2>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- <div class="clouds"></div> -->

<script src="assets/js/jquery.min.js"></script>
<script src="http://www.script-tutorials.com/assets/ads.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    var thehours = new Date().getHours();
	var themessage;
	var morning = ('Good morning');
	var afternoon = ('Good afternoon');
	var evening = ('Good evening');
	var night = ('Good night');

	if (thehours >= 0 && thehours < 12) {
		themessage = morning; 

	} else if (thehours >= 12 && thehours < 15) {
		themessage = afternoon;

	} else if (thehours >= 15 && thehours < 18) {
		themessage = evening;
	} else if (thehours >= 18 && thehours < 24) {
        themessage = night
    }


    $("#submit").on("click",function(){
        let name = $('#name').val();
        $('#form-view').hide();
        $('#greeting').fadeIn(2000);
        $('#greeting-text').append(themessage);
        $('#name-tf').html(name);
    });
</script>
</body>
</html>