<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateDataAutomationProject;

trait UpdateDataAutomationProjectTrait
{
    /**
     * @param UpdateDataAutomationProjectRequest $args
     * @return UpdateDataAutomationProjectResponse
     */
    public function updateDataAutomationProject(UpdateDataAutomationProjectRequest $args)
    {
        $result = parent::updateDataAutomationProject($args->toArray());
        return new UpdateDataAutomationProjectResponse($result->toArray());
    }
}
