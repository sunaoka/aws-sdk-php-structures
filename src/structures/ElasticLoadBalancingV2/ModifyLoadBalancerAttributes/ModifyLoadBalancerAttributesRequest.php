<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyLoadBalancerAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 * @property list<Shapes\LoadBalancerAttribute> $Attributes
 */
class ModifyLoadBalancerAttributesRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn: string,
     *     Attributes: list<Shapes\LoadBalancerAttribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
