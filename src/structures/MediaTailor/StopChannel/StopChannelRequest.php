<?php

namespace Sunaoka\Aws\Structures\MediaTailor\StopChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 */
class StopChannelRequest extends Request
{
    /**
     * @param array{ChannelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
