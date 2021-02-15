<?php foreach ($datas as $data): ?>
    <div class="center-block">
        <center>
            <br></br>
        	<iframe src="https://discordapp.com/widget?id=<?= $data['Discord']['api_discord']; ?>" width="100%" height="500" frameborder="0"></iframe>
			<br></br>
		</center>
	</div>
<?php endforeach; ?>
