<!DOCTYPE html>
<html>
<head>
  <title>Word Scrambler</title>
  
  <link href="{{ asset('bootstrap-material-design-master/styles/style.css') }}" rel="stylesheet">
</head>
<body>

<p>Word Scrambler</p>
<p>Score : <span id="score">0</span> Word : <span id="wrd">0</span></p>
<p style="font-size: inherit;">How to answer : Drag horizontal, horizontal back, vertical, vertical back, diagonal, diagonal back, diagonal up and diagonal back</p>

<div id='puzzle'></div>
<div id='words'></div>
<div><button id='solve'>Solve Word</button></div>

<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
<script type="text/javascript" src="{{ asset('bootstrap-material-design-master/src/cekword.js') }}"></script> 
<script type="text/javascript" src="{{ asset('bootstrap-material-design-master/scripts/cekword.js')}}"></script> 
<script>

  var words = ['cows', 'tracks', 'arrived', 'located', 'sir', 'seat',
               'division', 'effect', 'underline', 'view', 'annual',
               'anniversary', 'centennial', 'millennium', 'perennial',
               'artisan', 'apprentice', 'meteorologist', 'blizzard', 'tornado',
               'intensify','speed','count','consonant','someone',
               'sail','rolled','bear','wonder','smiled','angle', 'absent',
               'decadent', 'excellent', 'frequent', 'impatient', 'cell',
               'cytoplasm', 'organelle', 'diffusion', 'osmosis',
               'respiration'];

  var gamePuzzle = wordfindgame.create(words, '#puzzle', '#words');

  $('#solve').click( function() {
    wordfindgame.solve(gamePuzzle, words);
  });

  
  var puzzle = wordfind.newPuzzle(
    words, 
    {height: 18, width:18, fillBlanks: false}
  );
  wordfind.print(puzzle);

</script>
</body>
</html>