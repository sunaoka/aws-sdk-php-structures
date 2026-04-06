<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartLiveTail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 */
class SessionStreamingException extends Shape
{
    /**
     * @param array{message?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
