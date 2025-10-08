<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\UpdateTemplate;

trait UpdateTemplateTrait
{
    /**
     * @param UpdateTemplateRequest $args
     * @return UpdateTemplateResponse
     */
    public function updateTemplate(UpdateTemplateRequest $args)
    {
        $result = parent::updateTemplate($args->toArray());
        return new UpdateTemplateResponse($result->toArray());
    }
}
