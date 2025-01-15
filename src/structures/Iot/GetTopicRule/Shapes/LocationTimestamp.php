<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property string|null $unit
 */
class LocationTimestamp extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     unit?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
