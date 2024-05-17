<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php


if (isset($_POST['submit'])) {

    $month = $_POST['month'];
    $day = $_POST['day'];

    $bday = $day . ' ' . convertMonth($month);
    
    $babyBirthDate = new DateTime(strval($bday));
  
    $zodiacs = array(
      'Aries' => array(
        new DateTime('21 March'),
        new DateTime('20 April'),
      ),
      'Taurus' => array(
            new DateTime('21 April'),
            new DateTime('20 May'),
      ),
      'Gemini' => array(
            new DateTime('21 May'),
            new DateTime('20 June'),
      ),
      'Cancer' => array(
            new DateTime('21 June'),
            new DateTime('22 July'),
      ),
      'Leo' => array(
            new DateTime('23 July'),
            new DateTime('22 August'),
      ),
      'Virgo' => array(
            new DateTime('23 August'),
            new DateTime('22 September'),
      ),
      'Libra' => array(
            new DateTime('23 September'),
            new DateTime('22 October'),
      ),
      'Scorpio' => array(
            new DateTime('23 October'),
            new DateTime('21 November'),
      ),
      'Sagittarius' => array(
            new DateTime('22 November'),
            new DateTime('21 December'),
      ),
      'Capricorn' => array(
            new DateTime('22 December'),
            new DateTime('19 January'),
      ),
      'Aquarius' => array(
            new DateTime('20 January'),
            new DateTime('18 February'),
      ),
      'Pisces' => array(
            new DateTime('19 February'),
            new DateTime('20 March'),
      )
    );

    foreach ($zodiacs as $zodiac => $dateTimeRange) {
        if ($babyBirthDate >= $dateTimeRange[0] && $babyBirthDate <= $dateTimeRange[1]) {
            echo $zodiac;
            break;
        }
    }
  }

  function convertMonth($inputtedMonth) {

    switch ( $inputtedMonth ) {
      
      case 1: 
          return 'January';
          break;
      
      case 2:
          return 'February';
          break;
      
      case 3: 
          return 'March';
          break;
        
      case 4:
          return 'April';
          break;
      
      case 5:
          return 'May';
          break;
      
      case 6:
          return 'June';
          break;
      
      case 7:
          return 'July';
          break;
      
      case 8:
          return 'August';
          break;
      
      case 9:
          return 'September';
          break;
      
      case 10:
          return 'October';
          break;
      
      case 11:
          return 'November';
          break;
      
      case 12:
          return 'December';
          break;
    }
  }

  ?>
</body>
</html>