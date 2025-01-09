<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property array<string, string> $Attributes
 */
class InstanceSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
