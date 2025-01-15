<?php

namespace Sunaoka\Aws\Structures\KinesisVideoSignalingChannels\GetIceServerConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelARN
 * @property string|null $ClientId
 * @property 'TURN'|null $Service
 * @property string|null $Username
 */
class GetIceServerConfigRequest extends Request
{
    /**
     * @param array{
     *     ChannelARN: string,
     *     ClientId?: string|null,
     *     Service?: 'TURN'|null,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
