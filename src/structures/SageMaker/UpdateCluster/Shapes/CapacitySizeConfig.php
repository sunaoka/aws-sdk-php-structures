<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSTANCE_COUNT'|'CAPACITY_PERCENTAGE' $Type
 * @property int<1, max> $Value
 */
class CapacitySizeConfig extends Shape
{
    /**
     * @param array{
     *     Type: 'INSTANCE_COUNT'|'CAPACITY_PERCENTAGE',
     *     Value: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
