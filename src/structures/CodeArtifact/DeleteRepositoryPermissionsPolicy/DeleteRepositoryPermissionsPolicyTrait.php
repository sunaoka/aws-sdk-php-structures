<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeleteRepositoryPermissionsPolicy;

trait DeleteRepositoryPermissionsPolicyTrait
{
    /**
     * @param DeleteRepositoryPermissionsPolicyRequest $args
     * @return DeleteRepositoryPermissionsPolicyResponse
     */
    public function deleteRepositoryPermissionsPolicy(DeleteRepositoryPermissionsPolicyRequest $args)
    {
        $result = parent::deleteRepositoryPermissionsPolicy($args->toArray());
        return new DeleteRepositoryPermissionsPolicyResponse($result->toArray());
    }
}
