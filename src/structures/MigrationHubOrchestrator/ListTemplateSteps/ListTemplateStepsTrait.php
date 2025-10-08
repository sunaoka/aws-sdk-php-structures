<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListTemplateSteps;

trait ListTemplateStepsTrait
{
    /**
     * @param ListTemplateStepsRequest $args
     * @return ListTemplateStepsResponse
     */
    public function listTemplateSteps(ListTemplateStepsRequest $args)
    {
        $result = parent::listTemplateSteps($args->toArray());
        return new ListTemplateStepsResponse($result->toArray());
    }
}
