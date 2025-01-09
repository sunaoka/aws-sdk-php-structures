<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\RemoveNotificationChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelId
 * @property string $profilingGroupName
 */
class RemoveNotificationChannelRequest extends Request
{
    /**
     * @param array{
     *     channelId: string,
     *     profilingGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
