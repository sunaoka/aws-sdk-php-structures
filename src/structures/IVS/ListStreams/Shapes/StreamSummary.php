<?php

namespace Sunaoka\Aws\Structures\IVS\ListStreams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $channelArn
 * @property 'HEALTHY'|'STARVING'|'UNKNOWN'|null $health
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'LIVE'|'OFFLINE'|null $state
 * @property string|null $streamId
 * @property int|null $viewerCount
 */
class StreamSummary extends Shape
{
    /**
     * @param array{
     *     channelArn?: string|null,
     *     health?: 'HEALTHY'|'STARVING'|'UNKNOWN'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     state?: 'LIVE'|'OFFLINE'|null,
     *     streamId?: string|null,
     *     viewerCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
