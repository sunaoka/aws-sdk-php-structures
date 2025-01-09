<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerTlsCertificates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadBalancerName
 */
class GetLoadBalancerTlsCertificatesRequest extends Request
{
    /**
     * @param array{loadBalancerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
