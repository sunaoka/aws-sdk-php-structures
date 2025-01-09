<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DeleteLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 */
class DeleteLoadBalancerRequest extends Request
{
    /**
     * @param array{LoadBalancerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
