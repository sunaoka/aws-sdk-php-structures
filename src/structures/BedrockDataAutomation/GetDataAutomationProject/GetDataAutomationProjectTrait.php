<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationProject;

trait GetDataAutomationProjectTrait
{
    /**
     * @param GetDataAutomationProjectRequest $args
     * @return GetDataAutomationProjectResponse
     */
    public function getDataAutomationProject(GetDataAutomationProjectRequest $args)
    {
        $result = parent::getDataAutomationProject($args->toArray());
        return new GetDataAutomationProjectResponse($result->toArray());
    }
}
