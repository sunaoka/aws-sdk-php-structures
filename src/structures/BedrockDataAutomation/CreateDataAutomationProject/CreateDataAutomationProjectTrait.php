<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateDataAutomationProject;

trait CreateDataAutomationProjectTrait
{
    /**
     * @param CreateDataAutomationProjectRequest $args
     * @return CreateDataAutomationProjectResponse
     */
    public function createDataAutomationProject(CreateDataAutomationProjectRequest $args)
    {
        $result = parent::createDataAutomationProject($args->toArray());
        return new CreateDataAutomationProjectResponse($result->toArray());
    }
}
