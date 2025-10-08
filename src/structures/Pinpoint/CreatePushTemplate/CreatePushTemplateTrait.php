<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreatePushTemplate;

trait CreatePushTemplateTrait
{
    /**
     * @param CreatePushTemplateRequest $args
     * @return CreatePushTemplateResponse
     */
    public function createPushTemplate(CreatePushTemplateRequest $args)
    {
        $result = parent::createPushTemplate($args->toArray());
        return new CreatePushTemplateResponse($result->toArray());
    }
}
