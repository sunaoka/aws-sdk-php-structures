<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadBalancerName
 */
class GetLoadBalancerRequest extends Request
{
    /**
     * @param array{loadBalancerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
