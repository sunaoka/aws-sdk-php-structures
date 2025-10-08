<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListTemplateStepGroups;

trait ListTemplateStepGroupsTrait
{
    /**
     * @param ListTemplateStepGroupsRequest $args
     * @return ListTemplateStepGroupsResponse
     */
    public function listTemplateStepGroups(ListTemplateStepGroupsRequest $args)
    {
        $result = parent::listTemplateStepGroups($args->toArray());
        return new ListTemplateStepGroupsResponse($result->toArray());
    }
}
