<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetSystemTemplate;

trait GetSystemTemplateTrait
{
    /**
     * @param GetSystemTemplateRequest $args
     * @return GetSystemTemplateResponse
     */
    public function getSystemTemplate(GetSystemTemplateRequest $args)
    {
        $result = parent::getSystemTemplate($args->toArray());
        return new GetSystemTemplateResponse($result->toArray());
    }
}
