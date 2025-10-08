<?php

namespace Sunaoka\Aws\Structures\Proton\CreateServiceTemplate;

trait CreateServiceTemplateTrait
{
    /**
     * @param CreateServiceTemplateRequest $args
     * @return CreateServiceTemplateResponse
     */
    public function createServiceTemplate(CreateServiceTemplateRequest $args)
    {
        $result = parent::createServiceTemplate($args->toArray());
        return new CreateServiceTemplateResponse($result->toArray());
    }
}
