<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\PutDomainPermissionsPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $policyRevision
 * @property string $policyDocument
 */
class PutDomainPermissionsPolicyRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     policyRevision?: string,
     *     policyDocument: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
