<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetRepositoryPermissionsPolicy;

trait GetRepositoryPermissionsPolicyTrait
{
    /**
     * @param GetRepositoryPermissionsPolicyRequest $args
     * @return GetRepositoryPermissionsPolicyResponse
     */
    public function getRepositoryPermissionsPolicy(GetRepositoryPermissionsPolicyRequest $args)
    {
        $result = parent::getRepositoryPermissionsPolicy($args->toArray());
        return new GetRepositoryPermissionsPolicyResponse($result->toArray());
    }
}
