<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeleteRepositoryPermissionsPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $repository
 * @property string|null $policyRevision
 */
class DeleteRepositoryPermissionsPolicyRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     repository: string,
     *     policyRevision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
