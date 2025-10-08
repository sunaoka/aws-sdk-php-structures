<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetFlowTemplate;

trait GetFlowTemplateTrait
{
    /**
     * @param GetFlowTemplateRequest $args
     * @return GetFlowTemplateResponse
     */
    public function getFlowTemplate(GetFlowTemplateRequest $args)
    {
        $result = parent::getFlowTemplate($args->toArray());
        return new GetFlowTemplateResponse($result->toArray());
    }
}
