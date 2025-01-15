<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeListeners;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $LoadBalancerArn
 * @property list<string>|null $ListenerArns
 * @property string|null $Marker
 * @property int<1, 400>|null $PageSize
 */
class DescribeListenersRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn?: string|null,
     *     ListenerArns?: list<string>|null,
     *     Marker?: string|null,
     *     PageSize?: int<1, 400>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
