<?php

namespace Sunaoka\Aws\Structures\KinesisVideoSignalingChannels\GetIceServerConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelARN
 * @property string $ClientId
 * @property 'TURN' $Service
 * @property string $Username
 */
class GetIceServerConfigRequest extends Request
{
    /**
     * @param array{
     *     ChannelARN: string,
     *     ClientId?: string,
     *     Service?: 'TURN',
     *     Username?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
