<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property bool|null $isAttached
 */
class LoadBalancerTlsCertificateSummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     isAttached?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
