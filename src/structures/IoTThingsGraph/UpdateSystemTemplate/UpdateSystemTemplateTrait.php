<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\UpdateSystemTemplate;

trait UpdateSystemTemplateTrait
{
    /**
     * @param UpdateSystemTemplateRequest $args
     * @return UpdateSystemTemplateResponse
     */
    public function updateSystemTemplate(UpdateSystemTemplateRequest $args)
    {
        $result = parent::updateSystemTemplate($args->toArray());
        return new UpdateSystemTemplateResponse($result->toArray());
    }
}
