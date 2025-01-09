<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DetachLoadBalancers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<string> $LoadBalancerNames
 */
class DetachLoadBalancersRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     LoadBalancerNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
