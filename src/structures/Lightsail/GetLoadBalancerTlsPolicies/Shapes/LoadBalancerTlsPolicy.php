<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerTlsPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property bool|null $isDefault
 * @property string|null $description
 * @property list<string>|null $protocols
 * @property list<string>|null $ciphers
 */
class LoadBalancerTlsPolicy extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     isDefault?: bool|null,
     *     description?: string|null,
     *     protocols?: list<string>|null,
     *     ciphers?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
