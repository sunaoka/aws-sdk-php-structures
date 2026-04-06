<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetStateTemplate;

trait GetStateTemplateTrait
{
    /**
     * @param GetStateTemplateRequest $args
     * @return GetStateTemplateResponse
     */
    public function getStateTemplate(GetStateTemplateRequest $args)
    {
        $result = parent::getStateTemplate($args->toArray());
        return new GetStateTemplateResponse($result->toArray());
    }
}
