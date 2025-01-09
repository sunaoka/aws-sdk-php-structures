<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DeleteLoadBalancerPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property string $PolicyName
 */
class DeleteLoadBalancerPolicyRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     PolicyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
