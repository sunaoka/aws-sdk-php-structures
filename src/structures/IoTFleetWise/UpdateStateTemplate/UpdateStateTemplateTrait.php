<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateStateTemplate;

trait UpdateStateTemplateTrait
{
    /**
     * @param UpdateStateTemplateRequest $args
     * @return UpdateStateTemplateResponse
     */
    public function updateStateTemplate(UpdateStateTemplateRequest $args)
    {
        $result = parent::updateStateTemplate($args->toArray());
        return new UpdateStateTemplateResponse($result->toArray());
    }
}
