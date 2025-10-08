<?php

namespace Sunaoka\Aws\Structures\Proton\CreateEnvironmentTemplate;

trait CreateEnvironmentTemplateTrait
{
    /**
     * @param CreateEnvironmentTemplateRequest $args
     * @return CreateEnvironmentTemplateResponse
     */
    public function createEnvironmentTemplate(CreateEnvironmentTemplateRequest $args)
    {
        $result = parent::createEnvironmentTemplate($args->toArray());
        return new CreateEnvironmentTemplateResponse($result->toArray());
    }
}
