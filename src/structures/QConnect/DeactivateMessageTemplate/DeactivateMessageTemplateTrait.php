<?php

namespace Sunaoka\Aws\Structures\QConnect\DeactivateMessageTemplate;

trait DeactivateMessageTemplateTrait
{
    /**
     * @param DeactivateMessageTemplateRequest $args
     * @return DeactivateMessageTemplateResponse
     */
    public function deactivateMessageTemplate(DeactivateMessageTemplateRequest $args)
    {
        $result = parent::deactivateMessageTemplate($args->toArray());
        return new DeactivateMessageTemplateResponse($result->toArray());
    }
}
