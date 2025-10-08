<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateSmsTemplate;

trait CreateSmsTemplateTrait
{
    /**
     * @param CreateSmsTemplateRequest $args
     * @return CreateSmsTemplateResponse
     */
    public function createSmsTemplate(CreateSmsTemplateRequest $args)
    {
        $result = parent::createSmsTemplate($args->toArray());
        return new CreateSmsTemplateResponse($result->toArray());
    }
}
