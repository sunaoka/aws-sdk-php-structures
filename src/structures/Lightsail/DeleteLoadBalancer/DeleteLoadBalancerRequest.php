<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadBalancerName
 */
class DeleteLoadBalancerRequest extends Request
{
    /**
     * @param array{loadBalancerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
