<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerTlsCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'STARTED'|'FAILED' $code
 * @property string $message
 */
class LoadBalancerTlsCertificateDnsRecordCreationState extends Shape
{
    /**
     * @param array{
     *     code?: 'SUCCEEDED'|'STARTED'|'FAILED',
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
