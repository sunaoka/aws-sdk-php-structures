<?php

namespace Sunaoka\Aws\Structures\KinesisVideoWebRTCStorage\JoinStorageSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 */
class JoinStorageSessionRequest extends Request
{
    /**
     * @param array{channelArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
