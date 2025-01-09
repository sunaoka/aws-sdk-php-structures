<?php

namespace Sunaoka\Aws\Structures\IVS\GetStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channelArn
 * @property 'HEALTHY'|'STARVING'|'UNKNOWN' $health
 * @property string $playbackUrl
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'LIVE'|'OFFLINE' $state
 * @property string $streamId
 * @property int $viewerCount
 */
class Stream extends Shape
{
    /**
     * @param array{
     *     channelArn?: string,
     *     health?: 'HEALTHY'|'STARVING'|'UNKNOWN',
     *     playbackUrl?: string,
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
