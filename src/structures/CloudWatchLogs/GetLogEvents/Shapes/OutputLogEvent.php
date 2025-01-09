<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $timestamp
 * @property string $message
 * @property int<0, max> $ingestionTime
 */
class OutputLogEvent extends Shape
{
    /**
     * @param array{
     *     timestamp?: int<0, max>,
     *     message?: string,
     *     ingestionTime?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
