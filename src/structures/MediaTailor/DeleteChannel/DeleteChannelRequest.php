<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DeleteChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 */
class DeleteChannelRequest extends Request
{
    /**
     * @param array{ChannelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
