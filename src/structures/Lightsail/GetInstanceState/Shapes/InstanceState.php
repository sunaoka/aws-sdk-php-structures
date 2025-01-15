<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $code
 * @property string|null $name
 */
class InstanceState extends Shape
{
    /**
     * @param array{
     *     code?: int|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
