<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atanu Shomme</title>
  <link rel="shortcut icon" href="img/favicon_.png" />
  <link rel="stylesheet" href="{{ asset('css/basic.css') }}">
</head>

<body>
  <x-heading />

  <div class="margin-t40">
    <x-nav />
  </div>

  <div class="contents">
    <div class="column1"></div>
    <div class="bar2">
      <div class="education" style="width: 100%;">
        <div class='education__heading'>
          <h1 style="border-bottom: 1px solid #49688e; margin-bottom: 10px; color: #49688e;"> Course Materials </h1>

          <table class="table" style="width: 100%;">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Course ID</th>
                <th scope="col">Course Title</th>
                <th scope="col">PDF Link</th>
                <th scope="col">Book Reference</th>
                <th scope="col">comments</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>CSE 1103</td>
                <td>Discrete Mathematics</td>
                <td>No link given</td>
                <td>Introduction to Discrete Mathematics</td>
                <td>No comments shown</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>CSE 1101</td>
                <td>Structured Programming</td>
                <td>
                  <a href="http://moniruzzaman.xyz/">
                    <i class="fa fa-arrow-up-right-from-square"></i>
                  </a>
                </td>
                <td>Let us C</td>
                <td>No comments shown</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>CSE 4151</td>
                <td>DApplied Probability and Queueing Theory</td>
                <td>
                  <a href="http://moniruzzaman.xyz/">
                    <i class="fa fa-arrow-up-right-from-square"></i>
                  </a>
                </td>
                <td>Introduction to Probability Models</td>
                <td>No comments shown</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>

    </div>
</body>

</html>