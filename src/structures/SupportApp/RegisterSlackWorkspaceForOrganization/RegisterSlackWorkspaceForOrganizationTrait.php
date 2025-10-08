<?php

namespace Sunaoka\Aws\Structures\SupportApp\RegisterSlackWorkspaceForOrganization;

trait RegisterSlackWorkspaceForOrganizationTrait
{
    /**
     * @param RegisterSlackWorkspaceForOrganizationRequest $args
     * @return RegisterSlackWorkspaceForOrganizationResponse
     */
    public function registerSlackWorkspaceForOrganization(RegisterSlackWorkspaceForOrganizationRequest $args)
    {
        $result = parent::registerSlackWorkspaceForOrganization($args->toArray());
        return new RegisterSlackWorkspaceForOrganizationResponse($result->toArray());
    }
}
