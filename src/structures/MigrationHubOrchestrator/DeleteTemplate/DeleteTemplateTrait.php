<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\DeleteTemplate;

trait DeleteTemplateTrait
{
    /**
     * @param DeleteTemplateRequest $args
     * @return DeleteTemplateResponse
     */
    public function deleteTemplate(DeleteTemplateRequest $args)
    {
        $result = parent::deleteTemplate($args->toArray());
        return new DeleteTemplateResponse($result->toArray());
    }
}
