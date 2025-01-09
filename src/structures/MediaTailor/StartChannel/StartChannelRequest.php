<?php

namespace Sunaoka\Aws\Structures\MediaTailor\StartChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 */
class StartChannelRequest extends Request
{
    /**
     * @param array{ChannelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
