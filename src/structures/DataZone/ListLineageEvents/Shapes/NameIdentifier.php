<?php

namespace Sunaoka\Aws\Structures\DataZone\ListLineageEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $namespace
 */
class NameIdentifier extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     namespace?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
