<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplateStepGroup;

trait GetTemplateStepGroupTrait
{
    /**
     * @param GetTemplateStepGroupRequest $args
     * @return GetTemplateStepGroupResponse
     */
    public function getTemplateStepGroup(GetTemplateStepGroupRequest $args)
    {
        $result = parent::getTemplateStepGroup($args->toArray());
        return new GetTemplateStepGroupResponse($result->toArray());
    }
}
