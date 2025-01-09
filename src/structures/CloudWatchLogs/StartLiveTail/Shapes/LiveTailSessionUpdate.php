<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartLiveTail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LiveTailSessionMetadata $sessionMetadata
 * @property list<LiveTailSessionLogEvent> $sessionResults
 */
class LiveTailSessionUpdate extends Shape
{
    /**
     * @param array{
     *     sessionMetadata?: LiveTailSessionMetadata,
     *     sessionResults?: list<LiveTailSessionLogEvent>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
