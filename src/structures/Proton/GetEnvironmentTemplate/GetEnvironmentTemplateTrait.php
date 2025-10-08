<?php

namespace Sunaoka\Aws\Structures\Proton\GetEnvironmentTemplate;

trait GetEnvironmentTemplateTrait
{
    /**
     * @param GetEnvironmentTemplateRequest $args
     * @return GetEnvironmentTemplateResponse
     */
    public function getEnvironmentTemplate(GetEnvironmentTemplateRequest $args)
    {
        $result = parent::getEnvironmentTemplate($args->toArray());
        return new GetEnvironmentTemplateResponse($result->toArray());
    }
}
