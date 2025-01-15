<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchInstanceTypeLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MinimumInstanceCount
 * @property int|null $MaximumInstanceCount
 */
class InstanceCountLimits extends Shape
{
    /**
     * @param array{
     *     MinimumInstanceCount?: int|null,
     *     MaximumInstanceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
