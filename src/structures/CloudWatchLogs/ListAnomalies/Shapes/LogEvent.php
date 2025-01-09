<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $timestamp
 * @property string $message
 */
class LogEvent extends Shape
{
    /**
     * @param array{
     *     timestamp?: int,
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
