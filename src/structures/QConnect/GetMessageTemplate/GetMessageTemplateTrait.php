<?php

namespace Sunaoka\Aws\Structures\QConnect\GetMessageTemplate;

trait GetMessageTemplateTrait
{
    /**
     * @param GetMessageTemplateRequest $args
     * @return GetMessageTemplateResponse
     */
    public function getMessageTemplate(GetMessageTemplateRequest $args)
    {
        $result = parent::getMessageTemplate($args->toArray());
        return new GetMessageTemplateResponse($result->toArray());
    }
}
