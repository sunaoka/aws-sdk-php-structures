<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetServiceAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceArn
 * @property array<string, string> $Attributes
 */
class ServiceAttributes extends Shape
{
    /**
     * @param array{
     *     ServiceArn?: string,
     *     Attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
