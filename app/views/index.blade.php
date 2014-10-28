<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">

<h2>Colors</h2>

<table class="table table-striped table-bordered table-hover">
      <thead>
        <tr>
          <th>Colors</th>
          <th>Votes</th>
        </tr>
      </thead>
      <tbody>
        @foreach($colors as $color)
        <tr>
          <td><a href="javascript:showVotes('{{$color->color_id}}')">{{$color->color_name}}</a></td>
          <td id="votes_{{$color->color_id}}"></td>
        </tr>
        @endforeach
        <tr>
            <td><a href="javascript:showVotes('')">Total</a></td>
            <td id="votes_total"></td>
        </tr>
      </tbody>
    </table>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    function showVotes(colorId) {
        var url = '{{url('/votes')}}/' + colorId;
        $.get(url, function(data) {
            if(colorId){
                $('#votes_'+colorId).html(data);
            }
            else{
                $('#votes_total').html(data);
            }

        });
    }
</script>
</body>
</html>