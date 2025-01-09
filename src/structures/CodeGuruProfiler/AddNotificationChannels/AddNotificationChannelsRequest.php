<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\AddNotificationChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Channel> $channels
 * @property string $profilingGroupName
 */
class AddNotificationChannelsRequest extends Request
{
    /**
     * @param array{
     *     channels: list<Shapes\Channel>,
     *     profilingGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
