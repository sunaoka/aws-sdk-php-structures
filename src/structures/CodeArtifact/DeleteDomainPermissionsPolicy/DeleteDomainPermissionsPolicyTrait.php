<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeleteDomainPermissionsPolicy;

trait DeleteDomainPermissionsPolicyTrait
{
    /**
     * @param DeleteDomainPermissionsPolicyRequest $args
     * @return DeleteDomainPermissionsPolicyResponse
     */
    public function deleteDomainPermissionsPolicy(DeleteDomainPermissionsPolicyRequest $args)
    {
        $result = parent::deleteDomainPermissionsPolicy($args->toArray());
        return new DeleteDomainPermissionsPolicyResponse($result->toArray());
    }
}
