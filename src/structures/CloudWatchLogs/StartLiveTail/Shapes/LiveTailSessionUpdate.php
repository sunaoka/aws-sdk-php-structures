<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartLiveTail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LiveTailSessionMetadata|null $sessionMetadata
 * @property list<LiveTailSessionLogEvent>|null $sessionResults
 */
class LiveTailSessionUpdate extends Shape
{
    /**
     * @param array{
     *     sessionMetadata?: LiveTailSessionMetadata|null,
     *     sessionResults?: list<LiveTailSessionLogEvent>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
