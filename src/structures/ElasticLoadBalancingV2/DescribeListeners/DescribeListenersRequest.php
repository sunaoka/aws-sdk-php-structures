<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeListeners;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 * @property list<string> $ListenerArns
 * @property string $Marker
 * @property int $PageSize
 */
class DescribeListenersRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn?: string,
     *     ListenerArns?: list<string>,
     *     Marker?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
