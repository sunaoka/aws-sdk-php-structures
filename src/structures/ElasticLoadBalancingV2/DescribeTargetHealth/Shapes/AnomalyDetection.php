<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'anomalous'|'normal' $Result
 * @property 'yes'|'no' $MitigationInEffect
 */
class AnomalyDetection extends Shape
{
    /**
     * @param array{
     *     Result?: 'anomalous'|'normal',
     *     MitigationInEffect?: 'yes'|'no'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
