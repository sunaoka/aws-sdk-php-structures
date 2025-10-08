<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\CreateFlowTemplate;

trait CreateFlowTemplateTrait
{
    /**
     * @param CreateFlowTemplateRequest $args
     * @return CreateFlowTemplateResponse
     */
    public function createFlowTemplate(CreateFlowTemplateRequest $args)
    {
        $result = parent::createFlowTemplate($args->toArray());
        return new CreateFlowTemplateResponse($result->toArray());
    }
}
