<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeleteDomainPermissionsPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string|null $policyRevision
 */
class DeleteDomainPermissionsPolicyRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     policyRevision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
