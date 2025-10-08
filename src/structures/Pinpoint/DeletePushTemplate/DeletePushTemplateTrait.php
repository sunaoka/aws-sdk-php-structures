<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeletePushTemplate;

trait DeletePushTemplateTrait
{
    /**
     * @param DeletePushTemplateRequest $args
     * @return DeletePushTemplateResponse
     */
    public function deletePushTemplate(DeletePushTemplateRequest $args)
    {
        $result = parent::deletePushTemplate($args->toArray());
        return new DeletePushTemplateResponse($result->toArray());
    }
}
