<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTargetHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetGroupArn
 * @property list<Shapes\TargetDescription>|null $Targets
 */
class DescribeTargetHealthRequest extends Request
{
    /**
     * @param array{
     *     TargetGroupArn: string,
     *     Targets?: list<Shapes\TargetDescription>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
