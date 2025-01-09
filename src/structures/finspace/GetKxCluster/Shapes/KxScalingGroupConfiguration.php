<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scalingGroupName
 * @property int<6, max> $memoryLimit
 * @property int<6, max> $memoryReservation
 * @property int<1, max> $nodeCount
 * @property double $cpu
 */
class KxScalingGroupConfiguration extends Shape
{
    /**
     * @param array{
     *     scalingGroupName: string,
     *     memoryLimit?: int<6, max>,
     *     memoryReservation: int<6, max>,
     *     nodeCount: int<1, max>,
     *     cpu?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
