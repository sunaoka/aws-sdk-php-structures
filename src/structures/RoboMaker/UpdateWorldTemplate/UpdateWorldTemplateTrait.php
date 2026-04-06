<?php

namespace Sunaoka\Aws\Structures\RoboMaker\UpdateWorldTemplate;

trait UpdateWorldTemplateTrait
{
    /**
     * @param UpdateWorldTemplateRequest $args
     * @return UpdateWorldTemplateResponse
     */
    public function updateWorldTemplate(UpdateWorldTemplateRequest $args)
    {
        $result = parent::updateWorldTemplate($args->toArray());
        return new UpdateWorldTemplateResponse($result->toArray());
    }
}
