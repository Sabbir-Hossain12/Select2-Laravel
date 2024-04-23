<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="row justify-content-center">
    <div class="col-6">
        <h1>Hello World</h1>
        <form action="/select" method="post" class="form-control">
            @csrf
            <select class="js-example-basic-multiple form-control form-select" name="states[]" multiple="multiple">
                <option value="AL">Alabama</option>
                ...
                <option value="WY">Wyoming</option>
                <optgroup label="2nd">
                    <option value="WY1">Wyoming</option>
                    <option value="WY2">Wyoming</option>
                    <option value="WY3">Wyoming</option>
                    <option value="WY4">Wyoming</option>
                    <option value="WY5">Wyoming</option>


            </select>
            <button class="btn btn-primary" type="submit" onclick="showOptions()">Submit</button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2(
            {
                placeholder: 'Select an option',
                //multiple:false
            })
    })


 function   showOptions()
    {
        
        console.log($('.js-example-basic-multiple').val())
        
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>