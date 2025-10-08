<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateStateTemplate;

trait CreateStateTemplateTrait
{
    /**
     * @param CreateStateTemplateRequest $args
     * @return CreateStateTemplateResponse
     */
    public function createStateTemplate(CreateStateTemplateRequest $args)
    {
        $result = parent::createStateTemplate($args->toArray());
        return new CreateStateTemplateResponse($result->toArray());
    }
}
