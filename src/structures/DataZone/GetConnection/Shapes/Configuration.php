<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $classification
 * @property array<string, string>|null $properties
 */
class Configuration extends Shape
{
    /**
     * @param array{
     *     classification?: string|null,
     *     properties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
