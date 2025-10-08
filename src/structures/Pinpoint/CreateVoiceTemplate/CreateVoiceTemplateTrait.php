<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateVoiceTemplate;

trait CreateVoiceTemplateTrait
{
    /**
     * @param CreateVoiceTemplateRequest $args
     * @return CreateVoiceTemplateResponse
     */
    public function createVoiceTemplate(CreateVoiceTemplateRequest $args)
    {
        $result = parent::createVoiceTemplate($args->toArray());
        return new CreateVoiceTemplateResponse($result->toArray());
    }
}
