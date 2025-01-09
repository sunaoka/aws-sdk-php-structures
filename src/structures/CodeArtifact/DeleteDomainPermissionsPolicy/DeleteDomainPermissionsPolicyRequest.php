<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeleteDomainPermissionsPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $policyRevision
 */
class DeleteDomainPermissionsPolicyRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     policyRevision?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
