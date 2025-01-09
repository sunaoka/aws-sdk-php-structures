<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogGroupFields\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int $percent
 */
class LogGroupField extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     percent?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
