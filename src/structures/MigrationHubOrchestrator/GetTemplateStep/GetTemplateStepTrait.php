<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplateStep;

trait GetTemplateStepTrait
{
    /**
     * @param GetTemplateStepRequest $args
     * @return GetTemplateStepResponse
     */
    public function getTemplateStep(GetTemplateStepRequest $args)
    {
        $result = parent::getTemplateStep($args->toArray());
        return new GetTemplateStepResponse($result->toArray());
    }
}
