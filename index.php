<?php
    $output = file_get_contents(__DIR__."/template/index.tpl");
    $template_url = str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__."/template/");
    $output = str_replace("{template_path}",$template_url,$output);
    echo $output;
?>
