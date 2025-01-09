<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 */
class StartChannelRequest extends Request
{
    /**
     * @param array{ChannelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
