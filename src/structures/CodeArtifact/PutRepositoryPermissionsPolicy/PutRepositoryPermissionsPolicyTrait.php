<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\PutRepositoryPermissionsPolicy;

trait PutRepositoryPermissionsPolicyTrait
{
    /**
     * @param PutRepositoryPermissionsPolicyRequest $args
     * @return PutRepositoryPermissionsPolicyResponse
     */
    public function putRepositoryPermissionsPolicy(PutRepositoryPermissionsPolicyRequest $args)
    {
        $result = parent::putRepositoryPermissionsPolicy($args->toArray());
        return new PutRepositoryPermissionsPolicyResponse($result->toArray());
    }
}
