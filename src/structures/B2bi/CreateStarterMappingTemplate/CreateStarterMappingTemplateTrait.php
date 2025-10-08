<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateStarterMappingTemplate;

trait CreateStarterMappingTemplateTrait
{
    /**
     * @param CreateStarterMappingTemplateRequest $args
     * @return CreateStarterMappingTemplateResponse
     */
    public function createStarterMappingTemplate(CreateStarterMappingTemplateRequest $args)
    {
        $result = parent::createStarterMappingTemplate($args->toArray());
        return new CreateStarterMappingTemplateResponse($result->toArray());
    }
}
