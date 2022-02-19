<?php
include "header.php"; 
include "sidebar.php";
?>

<div id="playerinformation">
  <div>
    <!-- first -->
    <h1>
      Player Information
    </h1>
    <p>
      <ul class="list-none">
        <li><strong>ID: </strong>10101</li>
        <li><strong>Name: </strong>Juan Ramón Mateo</li>
        <li><strong>Joined: </strong>2019-11-08</li>
        <li><strong>Email: </strong>probably.unwise@protonmail.ch</li>
        <li><strong>Last Login: </strong>2021-10-14 18:13:29 (seconds ago)</li>
      </ul>
    </p>
  </div>
  <div>
    <!-- second -->
    <h1>
      Family Heraldry
    </h1>
    <p>
      <img src="parts/img/keswick.svg" alt="Heraldry">
      <button class="bg-slate-800 shadow-slate-800/50">Change Heraldry</button>
    </p>
  </div>
  <div>
    <!-- third -->
    <h1>
      Awesome Buttons to Click
    </h1>
    <p>
      <button class="bg-green-500 shadow-green-800/50 shadow-lg">Social Contract</button>
      <button class="bg-gray-800 shadow-gray-800/50 shadow-lg">Recruit A Friend</button>
      <button class="bg-yellow-500 shadow-yellow-800/50 shadow-lg">Make A Donation</button>
      <button class="bg-cyan-500 shadow-cyan-500/50 shadow-lg">Follow Us On Twitter</button>
    </p>
  </div>
  <div>
    <!-- fifth -->
    <h1>
      Non-existant Discord Widget
    </h1>
    <p>
      There's not anything to see here.
      <!-- there should be SOMETHING to see here -->
    </p>
  </div>
</div>

<div id="characterinformation">
  <!-- grid of character cards -->
  <div class="charactercard">
    <div class="activecharactercard">
      <!-- active character -->
      <h1>Leander</h1>
      <h6>Warrior/Infiltrator</h6>
      <p>Dwilight ~ Tol Goldora</p>
      <p class="py-4">7 hours</p>
      <p class="italic">travelling</p>
      <div class="cardbuttons">
      <button class="bg-amber-500 py-4">Play</button>
      <button class="bg-amber-500 py-4">Pause</button>
      </div>
    </div>
  </div>

  <div class="charactercard">
    <div class="activecharactercard">
      <!-- active character -->
      <h1>Eurwen</h1>
      <h6>Courtier</h6>
      <p>Colonies ~ Outer Tilo</p>
      <p class="py-8">12 hours</p>
      <p class="italic">ok</p>
    </div>
  </div>

  <div class="charactercard">
    <div class="pausedcharactercard">
      <!-- active character -->
      <h1>Armin</h1>
      <h6>Adventurer</h6>
      <p>East Continent ~ Yssrgard</p>
      <p class="py-8">&nbsp;</p>
      <p class="italic">&nbsp;</p>
    </div>
  </div>

<div class="charactercard">
  <div class="pausedcharactercard">
    <!-- active character -->
    <h1>Dinah</h1>
    <h6>Adventurer</h6>
    <p>Beluaterra ~ Irondale</p>
    <p class="py-8">&nbsp;</p>
    <p class="italic">&nbsp;</p>
  </div>
</div>
</div>


<?php include "footer.php"; ?>