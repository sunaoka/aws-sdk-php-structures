<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplate;

trait CreateMessageTemplateTrait
{
    /**
     * @param CreateMessageTemplateRequest $args
     * @return CreateMessageTemplateResponse
     */
    public function createMessageTemplate(CreateMessageTemplateRequest $args)
    {
        $result = parent::createMessageTemplate($args->toArray());
        return new CreateMessageTemplateResponse($result->toArray());
    }
}
