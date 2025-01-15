<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogGroupFields\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property int<0, 100>|null $percent
 */
class LogGroupField extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     percent?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
