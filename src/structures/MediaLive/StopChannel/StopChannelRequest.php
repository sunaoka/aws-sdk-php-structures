<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 */
class StopChannelRequest extends Request
{
    /**
     * @param array{ChannelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
