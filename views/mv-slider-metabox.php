<?php
    $meta = get_post_meta($post->ID);
    
    $link_text = get_post_meta($post->ID, 'mv_slider_link_text', true);
    $url_text = get_post_meta($post->ID, 'mv_slider_link_url', true);
?>
<table class="form-table mv-slider-metabox">
    <input type="hidden" name="mv_slider_nonce" value="<?= wp_create_nonce('mv_slider_nonce'); ?>">
    <tr>
        <th>
            <label for="mv_slider_link_text"><?php esc_html_e('Link Text', 'mv-slider'); ?></label>
        </th>
        <td>
            <input 
                type="text"
                name="mv_slider_link_text"
                id="mv_slider_link_text"
                class="regular_text link_text"
                value="<?= isset($link_text) ? esc_html($link_text) : ''; ?>"
                required
            >
        </td>
    </tr>
    <tr>
    <th>
        <label for="mv_slider_link_url"><?php _e('Link URL', 'mv-slider'); ?></label>
        </th>
        <td>
            <input 
                type="url"
                name="mv_slider_link_url"
                id="mv_slider_link_url"
                class="regular_text link_url"
                value="<?= isset($url_text) ? esc_html($url_text) : ''; ?>"
                required
            >
        </td>
    </tr>
</table>