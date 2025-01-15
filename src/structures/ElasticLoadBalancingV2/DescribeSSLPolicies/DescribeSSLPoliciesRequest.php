<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeSSLPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Names
 * @property string|null $Marker
 * @property int<1, 400>|null $PageSize
 * @property 'application'|'network'|'gateway'|null $LoadBalancerType
 */
class DescribeSSLPoliciesRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>|null,
     *     Marker?: string|null,
     *     PageSize?: int<1, 400>|null,
     *     LoadBalancerType?: 'application'|'network'|'gateway'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
