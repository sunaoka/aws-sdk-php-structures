<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerTlsPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pageToken
 */
class GetLoadBalancerTlsPoliciesRequest extends Request
{
    /**
     * @param array{pageToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
