<?php

namespace Sunaoka\Aws\Structures\Kinesis\DeleteChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelARN
 */
class DeleteChannelRequest extends Request
{
    /**
     * @param array{ChannelARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
