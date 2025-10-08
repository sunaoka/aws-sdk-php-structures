<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdatePushTemplate;

trait UpdatePushTemplateTrait
{
    /**
     * @param UpdatePushTemplateRequest $args
     * @return UpdatePushTemplateResponse
     */
    public function updatePushTemplate(UpdatePushTemplateRequest $args)
    {
        $result = parent::updatePushTemplate($args->toArray());
        return new UpdatePushTemplateResponse($result->toArray());
    }
}
