<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetServiceAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceArn
 * @property string|null $ResourceOwner
 * @property array<string, string>|null $Attributes
 */
class ServiceAttributes extends Shape
{
    /**
     * @param array{
     *     ServiceArn?: string|null,
     *     ResourceOwner?: string|null,
     *     Attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
