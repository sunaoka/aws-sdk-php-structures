<?php

namespace Sunaoka\Aws\Structures\QConnect\ActivateMessageTemplate;

trait ActivateMessageTemplateTrait
{
    /**
     * @param ActivateMessageTemplateRequest $args
     * @return ActivateMessageTemplateResponse
     */
    public function activateMessageTemplate(ActivateMessageTemplateRequest $args)
    {
        $result = parent::activateMessageTemplate($args->toArray());
        return new ActivateMessageTemplateResponse($result->toArray());
    }
}
