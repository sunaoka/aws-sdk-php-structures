<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateWorldTemplate;

trait CreateWorldTemplateTrait
{
    /**
     * @param CreateWorldTemplateRequest $args
     * @return CreateWorldTemplateResponse
     */
    public function createWorldTemplate(CreateWorldTemplateRequest $args)
    {
        $result = parent::createWorldTemplate($args->toArray());
        return new CreateWorldTemplateResponse($result->toArray());
    }
}
