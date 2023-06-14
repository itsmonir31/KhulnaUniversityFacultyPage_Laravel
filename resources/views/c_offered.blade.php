<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atanu Shomme</title>
  <link rel="shortcut icon" href="img/favicon_.png" />
  <link rel="stylesheet" href="{{ asset('css/teacher.css') }}">
  <link rel="stylesheet" href="{{ asset('css/nav_.css') }}">
  <link rel="stylesheet" href="{{ asset('css/card.css') }}">
  <link rel="stylesheet" href="{{ asset('css/education.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <x-heading/>

  <div class="margin-t40">
    <x-nav/>
  </div>

    <div class="contents">
      <div class="column1"></div>
      <div class="bar2">
            <div class='education'>
  <div class='education__heading'>
    <h2> Courses offered </h2>
   <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course ID</th>
      <th scope="col">Course Title</th>
      <th scope="col">Extra Info</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>CSE 1105</td>
      <td>Discrete Mathematics</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>CSE 2205</td>
      <td>Operating Systems</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>CSE 3101</td>
      <td>Database systems</td>
      <td>-</td>
    </tr>
  </tbody>
</table>
  </div>
      </div>
    </div>
</body>
</html>