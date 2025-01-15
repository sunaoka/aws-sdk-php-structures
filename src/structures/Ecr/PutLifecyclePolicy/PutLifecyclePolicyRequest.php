<?php

namespace Sunaoka\Aws\Structures\Ecr\PutLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property string $lifecyclePolicyText
 */
class PutLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     lifecyclePolicyText: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
