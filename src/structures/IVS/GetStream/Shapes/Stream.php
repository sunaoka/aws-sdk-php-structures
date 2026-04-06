<?php

namespace Sunaoka\Aws\Structures\IVS\GetStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $channelArn
 * @property string|null $streamId
 * @property string|null $playbackUrl
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'LIVE'|'OFFLINE'|null $state
 * @property 'HEALTHY'|'STARVING'|'UNKNOWN'|null $health
 * @property int|null $viewerCount
 */
class Stream extends Shape
{
    /**
     * @param array{
     *     channelArn?: string|null,
     *     streamId?: string|null,
     *     playbackUrl?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     state?: 'LIVE'|'OFFLINE'|null,
     *     health?: 'HEALTHY'|'STARVING'|'UNKNOWN'|null,
     *     viewerCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
