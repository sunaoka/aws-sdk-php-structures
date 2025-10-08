<?php

namespace Sunaoka\Aws\Structures\QConnect\DeleteMessageTemplate;

trait DeleteMessageTemplateTrait
{
    /**
     * @param DeleteMessageTemplateRequest $args
     * @return DeleteMessageTemplateResponse
     */
    public function deleteMessageTemplate(DeleteMessageTemplateRequest $args)
    {
        $result = parent::deleteMessageTemplate($args->toArray());
        return new DeleteMessageTemplateResponse($result->toArray());
    }
}
