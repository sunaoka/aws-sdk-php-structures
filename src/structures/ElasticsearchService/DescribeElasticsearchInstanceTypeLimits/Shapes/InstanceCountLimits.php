<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchInstanceTypeLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinimumInstanceCount
 * @property int $MaximumInstanceCount
 */
class InstanceCountLimits extends Shape
{
    /**
     * @param array{
     *     MinimumInstanceCount?: int,
     *     MaximumInstanceCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
