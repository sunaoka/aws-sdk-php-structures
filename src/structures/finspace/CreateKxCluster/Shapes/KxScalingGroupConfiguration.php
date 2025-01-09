<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scalingGroupName
 * @property int $memoryLimit
 * @property int $memoryReservation
 * @property int $nodeCount
 * @property double $cpu
 */
class KxScalingGroupConfiguration extends Shape
{
    /**
     * @param array{
     *     scalingGroupName: string,
     *     memoryLimit?: int,
     *     memoryReservation: int,
     *     nodeCount: int,
     *     cpu?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
