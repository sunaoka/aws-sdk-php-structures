<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DeleteRepositoryPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 */
class DeleteRepositoryPolicyRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
