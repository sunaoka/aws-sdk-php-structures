<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationProjects;

trait ListDataAutomationProjectsTrait
{
    /**
     * @param ListDataAutomationProjectsRequest $args
     * @return ListDataAutomationProjectsResponse
     */
    public function listDataAutomationProjects(ListDataAutomationProjectsRequest $args)
    {
        $result = parent::listDataAutomationProjects($args->toArray());
        return new ListDataAutomationProjectsResponse($result->toArray());
    }
}
