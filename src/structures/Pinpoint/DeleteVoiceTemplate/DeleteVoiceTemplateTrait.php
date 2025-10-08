<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteVoiceTemplate;

trait DeleteVoiceTemplateTrait
{
    /**
     * @param DeleteVoiceTemplateRequest $args
     * @return DeleteVoiceTemplateResponse
     */
    public function deleteVoiceTemplate(DeleteVoiceTemplateRequest $args)
    {
        $result = parent::deleteVoiceTemplate($args->toArray());
        return new DeleteVoiceTemplateResponse($result->toArray());
    }
}
