<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplate;

trait UpdateMessageTemplateTrait
{
    /**
     * @param UpdateMessageTemplateRequest $args
     * @return UpdateMessageTemplateResponse
     */
    public function updateMessageTemplate(UpdateMessageTemplateRequest $args)
    {
        $result = parent::updateMessageTemplate($args->toArray());
        return new UpdateMessageTemplateResponse($result->toArray());
    }
}
