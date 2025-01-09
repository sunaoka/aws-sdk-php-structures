<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSTANCE_COUNT'|'CAPACITY_PERCENT' $Type
 * @property int<1, max> $Value
 */
class CapacitySize extends Shape
{
    /**
     * @param array{
     *     Type: 'INSTANCE_COUNT'|'CAPACITY_PERCENT',
     *     Value: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
