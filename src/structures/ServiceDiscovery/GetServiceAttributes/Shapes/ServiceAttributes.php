<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetServiceAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceArn
 * @property array<string, string>|null $Attributes
 */
class ServiceAttributes extends Shape
{
    /**
     * @param array{
     *     ServiceArn?: string|null,
     *     Attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
