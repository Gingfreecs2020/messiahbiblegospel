<Section>
    <div>
        <!-- First Section -->
         <?php
            if (is_front_page()) {	
                get_template_part('loop', 'project');
            }
         ?>

    </div>
</Section>