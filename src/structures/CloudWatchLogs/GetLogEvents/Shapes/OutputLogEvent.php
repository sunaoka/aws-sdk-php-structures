<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $timestamp
 * @property string|null $message
 * @property int<0, max>|null $ingestionTime
 */
class OutputLogEvent extends Shape
{
    /**
     * @param array{
     *     timestamp?: int<0, max>|null,
     *     message?: string|null,
     *     ingestionTime?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
