<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeSSLPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Names
 * @property string $Marker
 * @property int<1, 400> $PageSize
 * @property 'application'|'network'|'gateway' $LoadBalancerType
 */
class DescribeSSLPoliciesRequest extends Request
{
    /**
     * @param array{
     *     Names?: list<string>,
     *     Marker?: string,
     *     PageSize?: int<1, 400>,
     *     LoadBalancerType?: 'application'|'network'|'gateway'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
