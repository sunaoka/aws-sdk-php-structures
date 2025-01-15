<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeEngineDefaultParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CacheNodeType
 * @property string|null $Value
 */
class CacheNodeTypeSpecificValue extends Shape
{
    /**
     * @param array{
     *     CacheNodeType?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
