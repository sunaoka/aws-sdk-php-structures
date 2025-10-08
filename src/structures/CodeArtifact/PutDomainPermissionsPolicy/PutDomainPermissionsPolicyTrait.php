<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\PutDomainPermissionsPolicy;

trait PutDomainPermissionsPolicyTrait
{
    /**
     * @param PutDomainPermissionsPolicyRequest $args
     * @return PutDomainPermissionsPolicyResponse
     */
    public function putDomainPermissionsPolicy(PutDomainPermissionsPolicyRequest $args)
    {
        $result = parent::putDomainPermissionsPolicy($args->toArray());
        return new PutDomainPermissionsPolicyResponse($result->toArray());
    }
}
