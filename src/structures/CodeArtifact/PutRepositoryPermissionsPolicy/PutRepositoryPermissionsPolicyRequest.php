<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\PutRepositoryPermissionsPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $repository
 * @property string $policyRevision
 * @property string $policyDocument
 */
class PutRepositoryPermissionsPolicyRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     repository: string,
     *     policyRevision?: string,
     *     policyDocument: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
