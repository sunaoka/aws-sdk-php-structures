<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetGroupArn
 * @property list<Shapes\TargetDescription> $Targets
 * @property list<'AnomalyDetection'|'All'> $Include
 */
class DescribeTargetHealthRequest extends Request
{
    /**
     * @param array{
     *     TargetGroupArn: string,
     *     Targets?: list<Shapes\TargetDescription>,
     *     Include?: list<'AnomalyDetection'|'All'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
