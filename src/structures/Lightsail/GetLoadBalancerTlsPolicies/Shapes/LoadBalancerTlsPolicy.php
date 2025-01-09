<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerTlsPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property bool $isDefault
 * @property string $description
 * @property list<string> $protocols
 * @property list<string> $ciphers
 */
class LoadBalancerTlsPolicy extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     isDefault?: bool,
     *     description?: string,
     *     protocols?: list<string>,
     *     ciphers?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
