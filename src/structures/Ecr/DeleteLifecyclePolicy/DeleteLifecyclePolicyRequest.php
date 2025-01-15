<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 */
class DeleteLifecyclePolicyRequest extends Request
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
