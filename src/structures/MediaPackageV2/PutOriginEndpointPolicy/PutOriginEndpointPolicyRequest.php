<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\PutOriginEndpointPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property string $Policy
 * @property Shapes\CdnAuthConfiguration|null $CdnAuthConfiguration
 */
class PutOriginEndpointPolicyRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     OriginEndpointName: string,
     *     Policy: string,
     *     CdnAuthConfiguration?: Shapes\CdnAuthConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
