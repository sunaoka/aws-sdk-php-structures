<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $timestamp
 * @property string $message
 * @property int $ingestionTime
 */
class OutputLogEvent extends Shape
{
    /**
     * @param array{
     *     timestamp?: int,
     *     message?: string,
     *     ingestionTime?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
