<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 */
class DeleteChannelRequest extends Request
{
    /**
     * @param array{ChannelId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
