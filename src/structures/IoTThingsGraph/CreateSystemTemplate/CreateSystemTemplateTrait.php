<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\CreateSystemTemplate;

trait CreateSystemTemplateTrait
{
    /**
     * @param CreateSystemTemplateRequest $args
     * @return CreateSystemTemplateResponse
     */
    public function createSystemTemplate(CreateSystemTemplateRequest $args)
    {
        $result = parent::createSystemTemplate($args->toArray());
        return new CreateSystemTemplateResponse($result->toArray());
    }
}
