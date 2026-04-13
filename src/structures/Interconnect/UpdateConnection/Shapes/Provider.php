<?php

namespace Sunaoka\Aws\Structures\Interconnect\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cloudServiceProvider
 * @property string|null $lastMileProvider
 */
class Provider extends Shape
{
    /**
     * @param array{
     *     cloudServiceProvider?: string|null,
     *     lastMileProvider?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
