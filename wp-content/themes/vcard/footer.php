<?php $vc_options = get_option('vcard_theme'); ?>
		</div>

<footer>
					<div class="row">
						<div class="col-md-7">
							<?php if(!empty($vc_options['copyrighttext'])):?>
							<p><?php echo ($vc_options['copyrighttext']);?></p>
							<?php endif ?>
						</div>
						<div class="col-md-5">
							<ul class="social">
								<?php if(!empty($vc_options['Social_l1'])):?>
								<li><a href="<?php echo ($vc_options['Social_l1']);?>"><img src="<?php echo ($vc_options['Social_i1']);?>" class="img-responsive" alt=""/></a></li>
								<?php endif?>
								<?php if(!empty($vc_options['Social_l2'])):?>
								<li><a href="<?php echo ($vc_options['Social_l2']);?>"><img src="<?php echo ($vc_options['Social_i2']);?>" class="img-responsive" alt=""/></a></li>
								<?php endif?>
								<?php if(!empty($vc_options['Social_l3'])):?>
								<li><a href="<?php echo ($vc_options['Social_l3']);?>"><img src="<?php echo ($vc_options['Social_i3']);?>" class="img-responsive" alt=""/></a></li>
								<?php endif?>
								<?php if(!empty($vc_options['Social_l4'])):?>
								<li><a href="<?php echo ($vc_options['Social_l4']);?>"><img src="<?php echo ($vc_options['Social_i4']);?>" class="img-responsive" alt=""/></a></li>
								<?php endif?>
								
							</ul>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>
</div>
<!-- MAIN CONTENT -->

<?php wp_footer();?>
</body>
</html>