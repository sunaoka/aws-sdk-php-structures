<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'launch'|'launch-before-terminate' $ReplacementStrategy
 * @property int $TerminationDelay
 */
class SpotCapacityRebalance extends Shape
{
    /**
     * @param array{
     *     ReplacementStrategy?: 'launch'|'launch-before-terminate',
     *     TerminationDelay?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
