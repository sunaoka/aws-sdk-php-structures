<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpointPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 */
class GetOriginEndpointPolicyRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     OriginEndpointName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
