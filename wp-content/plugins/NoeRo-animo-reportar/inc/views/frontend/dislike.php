<div class="cld-dislike-wrap  cld-common-wrap">
    <a href="<?php echo esc_attr($href); ?>"
       class="cld-dislike-trigger cld-like-dislike-trigger <?php echo ($already_liked == 1) ? 'cld-prevent' : ''; ?>"
       title="<?php echo esc_attr($dislike_title); ?>"
       data-comment-id="<?php echo intval($comment_id); ?>"
       data-trigger-type="dislike"
       data-restriction="<?php echo esc_attr($cld_settings['basic_settings']['like_dislike_resistriction']); ?>"
       data-already-liked="<?php echo esc_attr($already_liked); ?>">
           <?php
           $template = esc_attr($cld_settings['design_settings']['template']);
           switch ($template) {
               case 'template-1':
                   ?>
                <i class="fas fa-thumbs-down"></i>
                <?php
                break;
            case 'template-2':
                ?>
                <i class="fa fa-heartbeat"></i>
                <?php
                break;
            case 'template-3':
                ?>
                <i class="fas fa-times"></i>
                <?php
                break;
            case 'template-4':
                ?>
                <i class="far fa-frown"></i>
                <?php
                break;
            case 'custom':
                if ($cld_settings['design_settings']['dislike_icon'] != '') {
                    ?>
                    <img id="ruido" src="<?php echo esc_url($cld_settings['design_settings']['dislike_icon']); ?>" alt="<?php echo esc_attr($dislike_title); ?>"/>
					<img id="ruido1" src="http://eutamen.gal/wp-content/uploads/2021/08/ruido1.png" alt="Reportar"/>
                    <?php
                }
                break;
        }
        /**
         * Fires when template is being loaded
         *
         * @param array $cld_settings
         *
         * @since 1.0.0
         */
        do_action('cld_dislike_template', $cld_settings);
        ?>
    
	<!-- Comento a seguinte liña para qe non aparezca o numero de xente que lle dou a like
	Ata onde entendo eu, a variable $dislike_count segue sumandose. Polo que se pode poñer o contador de que no 10 reporte ao administrador-->


  <!-- <span class="cld-dislike-count-wrap cld-count-wrap"><?php echo $dislike_count; ?></span>-->
		<!--Neste caso tense que ver tanto a palabra ánimo como o contador-->
		<?php echo "Reportar"; ?>
		</a>
</div>