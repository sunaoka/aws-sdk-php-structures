<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSTANCE_COUNT'|'CAPACITY_PERCENT' $Type
 * @property int $Value
 */
class CapacitySize extends Shape
{
    /**
     * @param array{
     *     Type: 'INSTANCE_COUNT'|'CAPACITY_PERCENT',
     *     Value: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
