<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartLiveTail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LiveTailSessionStart|null $sessionStart
 * @property LiveTailSessionUpdate|null $sessionUpdate
 * @property SessionTimeoutException|null $SessionTimeoutException
 * @property SessionStreamingException|null $SessionStreamingException
 */
class StartLiveTailResponseStream extends Shape
{
    /**
     * @param array{
     *     sessionStart?: LiveTailSessionStart|null,
     *     sessionUpdate?: LiveTailSessionUpdate|null,
     *     SessionTimeoutException?: SessionTimeoutException|null,
     *     SessionStreamingException?: SessionStreamingException|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
