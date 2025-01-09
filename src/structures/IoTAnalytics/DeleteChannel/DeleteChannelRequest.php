<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DeleteChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelName
 */
class DeleteChannelRequest extends Request
{
    /**
     * @param array{channelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
