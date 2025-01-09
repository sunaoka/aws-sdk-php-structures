<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 */
class DeleteScheduleRequest extends Request
{
    /**
     * @param array{ChannelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
