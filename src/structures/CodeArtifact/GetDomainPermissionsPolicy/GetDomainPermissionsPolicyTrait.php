<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetDomainPermissionsPolicy;

trait GetDomainPermissionsPolicyTrait
{
    /**
     * @param GetDomainPermissionsPolicyRequest $args
     * @return GetDomainPermissionsPolicyResponse
     */
    public function getDomainPermissionsPolicy(GetDomainPermissionsPolicyRequest $args)
    {
        $result = parent::getDomainPermissionsPolicy($args->toArray());
        return new GetDomainPermissionsPolicyResponse($result->toArray());
    }
}
