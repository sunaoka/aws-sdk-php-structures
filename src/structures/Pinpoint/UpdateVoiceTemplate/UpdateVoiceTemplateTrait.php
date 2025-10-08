<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateVoiceTemplate;

trait UpdateVoiceTemplateTrait
{
    /**
     * @param UpdateVoiceTemplateRequest $args
     * @return UpdateVoiceTemplateResponse
     */
    public function updateVoiceTemplate(UpdateVoiceTemplateRequest $args)
    {
        $result = parent::updateVoiceTemplate($args->toArray());
        return new UpdateVoiceTemplateResponse($result->toArray());
    }
}
