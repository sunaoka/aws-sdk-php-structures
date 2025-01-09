<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property bool $isAttached
 */
class LoadBalancerTlsCertificateSummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     isAttached?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
