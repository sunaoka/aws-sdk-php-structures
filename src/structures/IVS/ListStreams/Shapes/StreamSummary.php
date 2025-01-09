<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channelArn
 * @property 'HEALTHY'|'STARVING'|'UNKNOWN' $health
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'LIVE'|'OFFLINE' $state
 * @property string $streamId
 * @property int $viewerCount
 */
class StreamSummary extends Shape
{
    /**
     * @param array{
     *     channelArn?: string,
     *     health?: 'HEALTHY'|'STARVING'|'UNKNOWN',
     *     startTime?: \Aws\Api\DateTimeResult,
     *     state?: 'LIVE'|'OFFLINE',
     *     streamId?: string,
     *     viewerCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
