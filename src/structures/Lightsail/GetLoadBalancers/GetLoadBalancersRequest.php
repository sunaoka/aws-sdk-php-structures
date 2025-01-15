<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $pageToken
 */
class GetLoadBalancersRequest extends Request
{
    /**
     * @param array{pageToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
