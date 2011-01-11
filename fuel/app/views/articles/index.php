
<h3>Hello and welcome to Petrol, a much improved version of stationwagon. </h3> 
<span>The idea behind petrol is to make a simple CRUD based lightweight blog. </span>
<ol>
<li>Make a very simple CRUD app based on the awesomness of Fuelphp</li>
<li>A Blog that anyone can form and extend</li>
</ol>
<?php if ( $total_articles > 0 ): ?>


<?php foreach ($articles as $article): ?>

	<table class="tlist" width="100%">
		<tr>        
			<td class="row1"><?php echo 'Title: ' . Html::anchor('articles/view/'.$article->id, $article->title); ?></td>
		</tr>
		<tr>        
			<td class="row1" width="12%"><?php echo 'Created on: ' . Date::Factory($article->created_time)->format("%m/%d/%Y"); ?></td>    
		</tr>
		<tr>        
			<td class="row1" width="12%"><?php echo 'Filed under: ' . print_r($categories); ?></td>    
		</tr>
	</table><br /><br />
<?php endforeach; ?>


<div style="text-align:center; padding-top: 10px;"><?php echo Pagination::create_links(); ?></div>

<?php else: ?>
<p>You did not add any articles. <?php echo Html::anchor('articles/add', 'Add an Article'); ?>.</p>
<?php endif; ?>