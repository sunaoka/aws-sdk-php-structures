<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceAuthentication;

trait UpdateWorkspaceAuthenticationTrait
{
    /**
     * @param UpdateWorkspaceAuthenticationRequest $args
     * @return UpdateWorkspaceAuthenticationResponse
     */
    public function updateWorkspaceAuthentication(UpdateWorkspaceAuthenticationRequest $args)
    {
        $result = parent::updateWorkspaceAuthentication($args->toArray());
        return new UpdateWorkspaceAuthenticationResponse($result->toArray());
    }
}
