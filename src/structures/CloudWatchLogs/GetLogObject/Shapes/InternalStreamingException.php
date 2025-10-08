<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 */
class InternalStreamingException extends Shape
{
    /**
     * @param array{message?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
