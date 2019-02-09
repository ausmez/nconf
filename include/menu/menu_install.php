<?php
echo '<h2 class="ui-widget-header header"><span>Installation</span></h2>';

echo '
    <div class="ui-widget-content box_content">
        <table border=0 width=188>
                <tr>
                    <td>';
                        if ( isset($step) AND $step == 0 ){
                            echo '<div class="link_with_tag link_with_tag_active">Pre-Install Check</div>';
                        }else{
                            echo '<div class="link_with_tag">Pre-Install Check</div>';
                        }

                        # steps:
                        for ($i = 1; $i< 5; $i++){
                            echo '<br><div class="';
                            if ( $i == $step ){
                                echo "link_with_tag link_with_tag_active";
                            }else{
                                echo "link_with_tag";
                            }
                            echo '">Step '.($i).'</div>';
                        }
                        echo '
                    </td>
                </tr>

        </table>
    </div>
';


if (!empty($_SESSION) ){
echo '
    <h2 class="ui-widget-header header"><span>Restart</span></h2>
    <div class="ui-widget-content box_content">
        <table border=0 width=188>
                <tr>
                    <td>
                        <div class="link_with_tag">
                            <a href="INSTALL.php?logout=1">Restart Installation</a>
                        </div>
                    </td>
                </tr>
        </table>
    </div>
    ';

}


?>
