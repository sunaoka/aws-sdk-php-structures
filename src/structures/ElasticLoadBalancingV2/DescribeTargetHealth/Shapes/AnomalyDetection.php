<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'anomalous'|'normal'|null $Result
 * @property 'yes'|'no'|null $MitigationInEffect
 */
class AnomalyDetection extends Shape
{
    /**
     * @param array{
     *     Result?: 'anomalous'|'normal'|null,
     *     MitigationInEffect?: 'yes'|'no'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
