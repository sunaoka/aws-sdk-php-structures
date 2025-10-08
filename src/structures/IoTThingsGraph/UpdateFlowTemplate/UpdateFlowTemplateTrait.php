<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\UpdateFlowTemplate;

trait UpdateFlowTemplateTrait
{
    /**
     * @param UpdateFlowTemplateRequest $args
     * @return UpdateFlowTemplateResponse
     */
    public function updateFlowTemplate(UpdateFlowTemplateRequest $args)
    {
        $result = parent::updateFlowTemplate($args->toArray());
        return new UpdateFlowTemplateResponse($result->toArray());
    }
}
