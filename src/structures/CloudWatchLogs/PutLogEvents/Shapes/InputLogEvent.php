<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutLogEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $timestamp
 * @property string $message
 */
class InputLogEvent extends Shape
{
    /**
     * @param array{
     *     timestamp: int,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
