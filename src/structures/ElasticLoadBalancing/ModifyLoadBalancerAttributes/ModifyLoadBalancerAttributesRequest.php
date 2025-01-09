<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\ModifyLoadBalancerAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property Shapes\LoadBalancerAttributes $LoadBalancerAttributes
 */
class ModifyLoadBalancerAttributesRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     LoadBalancerAttributes: Shapes\LoadBalancerAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
