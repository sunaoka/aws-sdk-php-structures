<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $channelArn
 * @property string|null $streamId
 * @property 'LIVE'|'OFFLINE'|null $state
 * @property 'HEALTHY'|'STARVING'|'UNKNOWN'|null $health
 * @property int|null $viewerCount
 * @property \Aws\Api\DateTimeResult|null $startTime
 */
class StreamSummary extends Shape
{
    /**
     * @param array{
     *     channelArn?: string|null,
     *     streamId?: string|null,
     *     state?: 'LIVE'|'OFFLINE'|null,
     *     health?: 'HEALTHY'|'STARVING'|'UNKNOWN'|null,
     *     viewerCount?: int|null,
     *     startTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
