<?php
/**
* @package		EasySocial
* @copyright	Copyright (C) 2010 - 2013 Stack Ideas Sdn Bhd. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* EasySocial is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/
defined( '_JEXEC' ) or die( 'Unauthorized Access' );
?>
<div class="es-widget">
	<div class="es-widget-head">
		<div class="pull-left widget-title">
			<?php echo JText::_( 'APP_PHOTOS_PROFILE_WIDGET_TITLE_PHOTOS' ); ?>
		</div>
		<?php if( $params->get( 'showcount' ) ){ ?>
		<span class="widget-label">( <?php echo $total;?> )</span>
		<?php } ?>
	</div>
	<div class="es-widget-body">
		<ul class="widget-list-grid">
			<?php if( $photos ){ ?>
				<?php foreach( $photos as $photo ){ ?>
					<li>
						<a href="<?php echo FRoute::photos( array( 'id' => $photo->getAlias() , 'layout' => 'item' , 'userid' => $user->getAlias() ) );?>" 
							data-es-provide="tooltip"
							data-original-title="<?php echo $photo->get( 'title' );?>"
							data-placement="bottom"
							class="es-avatar es-borderless"
						>
							<img src="<?php echo $photo->getSource('square');?>" alt="<?php echo $this->html( 'string.escape' , $photo->get('title' ) );?>" />
						</a>
					</li>
				<?php } ?>
			<?php } else { ?>
			<li>
				<div class="small empty">
					<?php echo JText::_( 'APP_PHOTOS_PROFILE_WIDGET_NO_PHOTOS_UPLOADED_YET' ); ?>
				</div>
			</li>
			<?php } ?>
		</ul>

		<?php if( !empty( $photos ) ){ ?>
		<div>
			<a class="small" href="<?php echo FRoute::albums( array( 'userid' => $user->getAlias() ) );?>"><?php echo JText::_( 'APP_PHOTOS_PROFILE_WIDGET_VIEW_ALL' );?></a>
		</div>
		<?php } ?>
	</div>
</div>
