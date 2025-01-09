<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\SetLoadBalancerPoliciesOfListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property int $LoadBalancerPort
 * @property list<string> $PolicyNames
 */
class SetLoadBalancerPoliciesOfListenerRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     LoadBalancerPort: int,
     *     PolicyNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
