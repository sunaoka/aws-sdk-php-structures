<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetVoiceTemplate;

trait GetVoiceTemplateTrait
{
    /**
     * @param GetVoiceTemplateRequest $args
     * @return GetVoiceTemplateResponse
     */
    public function getVoiceTemplate(GetVoiceTemplateRequest $args)
    {
        $result = parent::getVoiceTemplate($args->toArray());
        return new GetVoiceTemplateResponse($result->toArray());
    }
}
