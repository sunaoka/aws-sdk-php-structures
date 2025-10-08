<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DeployWorkspaceApplications;

trait DeployWorkspaceApplicationsTrait
{
    /**
     * @param DeployWorkspaceApplicationsRequest $args
     * @return DeployWorkspaceApplicationsResponse
     */
    public function deployWorkspaceApplications(DeployWorkspaceApplicationsRequest $args)
    {
        $result = parent::deployWorkspaceApplications($args->toArray());
        return new DeployWorkspaceApplicationsResponse($result->toArray());
    }
}
