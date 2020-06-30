	<footer id="footer" class="footer">
		<div class="footer__copy">
			gameb 2019
		</div>
	<script>
	$(function () {
		setTimeout(function () {
			PR.prettyPrint();
		},10);
		$('.comm-list li a').click(function () {
			var text = $(this).find('.t').text();
			ga('send','event','list','click',text);
		});
		$('.portfolio__list li a').click(function () {
			var text = $(this).find('img').attr('alt');
			ga('send','event','portfolio','click',text);
		});
	});
	</script>		
	</footer>
</div>
</body>
</html>