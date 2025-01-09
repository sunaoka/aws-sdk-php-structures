<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property string $unit
 */
class LocationTimestamp extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     unit?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
