<?php

namespace Sunaoka\Aws\Structures\Ecr\PutLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property string $lifecyclePolicyText
 */
class PutLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     lifecyclePolicyText: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
