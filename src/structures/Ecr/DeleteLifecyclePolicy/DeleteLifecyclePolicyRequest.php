<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 */
class DeleteLifecyclePolicyRequest extends Request
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
