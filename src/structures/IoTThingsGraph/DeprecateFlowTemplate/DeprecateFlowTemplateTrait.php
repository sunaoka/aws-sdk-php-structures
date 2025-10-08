<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DeprecateFlowTemplate;

trait DeprecateFlowTemplateTrait
{
    /**
     * @param DeprecateFlowTemplateRequest $args
     * @return DeprecateFlowTemplateResponse
     */
    public function deprecateFlowTemplate(DeprecateFlowTemplateRequest $args)
    {
        $result = parent::deprecateFlowTemplate($args->toArray());
        return new DeprecateFlowTemplateResponse($result->toArray());
    }
}
