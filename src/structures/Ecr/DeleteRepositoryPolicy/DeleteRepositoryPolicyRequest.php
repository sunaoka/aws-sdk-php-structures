<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteRepositoryPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 */
class DeleteRepositoryPolicyRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
