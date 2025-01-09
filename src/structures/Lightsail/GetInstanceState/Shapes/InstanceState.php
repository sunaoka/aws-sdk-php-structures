<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $code
 * @property string $name
 */
class InstanceState extends Shape
{
    /**
     * @param array{
     *     code?: int,
     *     name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
