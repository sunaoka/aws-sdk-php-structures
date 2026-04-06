<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\DeleteDataAutomationProject;

trait DeleteDataAutomationProjectTrait
{
    /**
     * @param DeleteDataAutomationProjectRequest $args
     * @return DeleteDataAutomationProjectResponse
     */
    public function deleteDataAutomationProject(DeleteDataAutomationProjectRequest $args)
    {
        $result = parent::deleteDataAutomationProject($args->toArray());
        return new DeleteDataAutomationProjectResponse($result->toArray());
    }
}
