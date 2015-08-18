<?php

class kimtajo_subpage_widget extends WidgetHandler
{
    function proc($args)
    {
        $context = new stdClass();
        $tpl_path = sprintf('%sskins/%s', $this->widget_path, $args->skin); // 위젯 주소
        $context = $args;

        /*
        $context->title = $args->title;
        $context->sub_title = $args->sub_title;
        $context->content_type = $args->content_type;
        if($context->context_type === "image")
            $context->content = $args->content_image;
        else if($context->context_type === "text")
            $context->content = $args->content_text;
*/

        Context::set("context", $context);

        $tpl_file = 'kimtajo_subpage_widget';

        $oTemplate = &TemplateHandler::getInstance();
        return $oTemplate->compile($tpl_path, $tpl_file);
    }
}
?>