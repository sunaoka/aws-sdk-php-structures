<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\CreateTemplate;

trait CreateTemplateTrait
{
    /**
     * @param CreateTemplateRequest $args
     * @return CreateTemplateResponse
     */
    public function createTemplate(CreateTemplateRequest $args)
    {
        $result = parent::createTemplate($args->toArray());
        return new CreateTemplateResponse($result->toArray());
    }
}
