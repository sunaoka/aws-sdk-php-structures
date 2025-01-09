<?php

namespace Sunaoka\Aws\Structures\AutoScaling\AttachLoadBalancers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<string> $LoadBalancerNames
 */
class AttachLoadBalancersRequest extends Request
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
