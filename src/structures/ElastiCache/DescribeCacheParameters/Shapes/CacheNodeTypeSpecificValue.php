<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CacheNodeType
 * @property string $Value
 */
class CacheNodeTypeSpecificValue extends Shape
{
    /**
     * @param array{
     *     CacheNodeType?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
