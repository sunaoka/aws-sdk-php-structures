<?php

namespace Sunaoka\Aws\Structures\IVS\GetStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 */
class GetStreamRequest extends Request
{
    /**
     * @param array{channelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
