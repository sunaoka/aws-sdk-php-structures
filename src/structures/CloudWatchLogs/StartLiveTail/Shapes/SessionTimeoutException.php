<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartLiveTail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 */
class SessionTimeoutException extends Shape
{
    /**
     * @param array{message?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
