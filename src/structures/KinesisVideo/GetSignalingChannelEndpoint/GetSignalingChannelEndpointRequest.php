<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\GetSignalingChannelEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelARN
 * @property Shapes\SingleMasterChannelEndpointConfiguration|null $SingleMasterChannelEndpointConfiguration
 */
class GetSignalingChannelEndpointRequest extends Request
{
    /**
     * @param array{
     *     ChannelARN: string,
     *     SingleMasterChannelEndpointConfiguration?: Shapes\SingleMasterChannelEndpointConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
