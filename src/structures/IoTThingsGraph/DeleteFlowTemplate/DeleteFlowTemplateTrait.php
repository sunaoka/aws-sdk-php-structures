<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DeleteFlowTemplate;

trait DeleteFlowTemplateTrait
{
    /**
     * @param DeleteFlowTemplateRequest $args
     * @return DeleteFlowTemplateResponse
     */
    public function deleteFlowTemplate(DeleteFlowTemplateRequest $args)
    {
        $result = parent::deleteFlowTemplate($args->toArray());
        return new DeleteFlowTemplateResponse($result->toArray());
    }
}
