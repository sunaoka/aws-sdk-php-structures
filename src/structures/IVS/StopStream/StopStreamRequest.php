<?php

namespace Sunaoka\Aws\Structures\IVS\StopStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 */
class StopStreamRequest extends Request
{
    /**
     * @param array{channelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
