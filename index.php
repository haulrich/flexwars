<?php include('header.php'); ?>

<?php
    $episodes = array(
        1=>[1999,'The Phantom Menace','Young Anakin'],
        2=>[2002,'Attack of the Clones','Oops we ordered clones'],
        3=>[2005,'Revenge of the Sith','Anakin; Darth Vader to power'],
        4=>[1977,'A New Hope','Young Luke; Darth Vader defeat'],
        5=>[1980,'The Empire Strikes Back','Young Luke'],
        6=>[1983,'Return of the Jedi','Adult Luke'],
        7=>[2015,'The Force Awakens','Rey and Finn'],
        8=>[2017,'The Last Jedi','Rey and Kylo Ren'],
        9=>[2019,'The Rise of Skywalker','...'],
    );
?>
<header>
    <h1>Star Wars</h1>
    <h2>The flex order</h2>
    <nav>
        <button id="column">Column</button>
        <button id="row-wrap">Rows</button>
    </nav>
</header>
<main class="container episodes view-grid">
<?php foreach($episodes as $episode=>$details) { ?>
    <section style="order: <?php echo $episode; ?>">
        <h1><?php echo $details[0]; ?></h1>
        <h2><?php echo $details[1]; ?></h2>
        <p class="description"><?php echo $details[2]; ?></p>
    </section>
<?php }; ?>
</main>
<?php include('footer.php');
