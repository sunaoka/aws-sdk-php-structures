<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartLiveTail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LiveTailSessionStart $sessionStart
 * @property LiveTailSessionUpdate $sessionUpdate
 * @property SessionTimeoutException $SessionTimeoutException
 * @property SessionStreamingException $SessionStreamingException
 */
class StartLiveTailResponseStream extends Shape
{
    /**
     * @param array{
     *     sessionStart?: LiveTailSessionStart,
     *     sessionUpdate?: LiveTailSessionUpdate,
     *     SessionTimeoutException?: SessionTimeoutException,
     *     SessionStreamingException?: SessionStreamingException
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
