<?php

namespace Sunaoka\Aws\Structures\KinesisVideoWebRTCStorage\JoinStorageSessionAsViewer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property string $clientId
 */
class JoinStorageSessionAsViewerRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     clientId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
