<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribePullThroughCacheRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ecrRepositoryPrefix
 * @property string|null $upstreamRegistryUrl
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $registryId
 */
class PullThroughCacheRule extends Shape
{
    /**
     * @param array{
     *     ecrRepositoryPrefix?: string|null,
     *     upstreamRegistryUrl?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     registryId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
