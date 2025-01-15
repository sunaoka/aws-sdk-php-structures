<?php

namespace Sunaoka\Aws\Structures\EventBridge\StartReplay;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplayName
 * @property string|null $Description
 * @property string $EventSourceArn
 * @property \Aws\Api\DateTimeResult $EventStartTime
 * @property \Aws\Api\DateTimeResult $EventEndTime
 * @property Shapes\ReplayDestination $Destination
 */
class StartReplayRequest extends Request
{
    /**
     * @param array{
     *     ReplayName: string,
     *     Description?: string|null,
     *     EventSourceArn: string,
     *     EventStartTime: \Aws\Api\DateTimeResult,
     *     EventEndTime: \Aws\Api\DateTimeResult,
     *     Destination: Shapes\ReplayDestination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
