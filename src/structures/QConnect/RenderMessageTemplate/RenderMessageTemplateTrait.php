<?php

namespace Sunaoka\Aws\Structures\QConnect\RenderMessageTemplate;

trait RenderMessageTemplateTrait
{
    /**
     * @param RenderMessageTemplateRequest $args
     * @return RenderMessageTemplateResponse
     */
    public function renderMessageTemplate(RenderMessageTemplateRequest $args)
    {
        $result = parent::renderMessageTemplate($args->toArray());
        return new RenderMessageTemplateResponse($result->toArray());
    }
}
