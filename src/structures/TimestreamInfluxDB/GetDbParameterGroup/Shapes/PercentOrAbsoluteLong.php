<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\GetDbParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $percent
 * @property int<0, 1610612736000>|null $absolute
 */
class PercentOrAbsoluteLong extends Shape
{
    /**
     * @param array{
     *     percent?: string|null,
     *     absolute?: int<0, 1610612736000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
