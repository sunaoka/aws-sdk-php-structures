<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpointPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property string $Policy
 * @property Shapes\CdnAuthConfiguration|null $CdnAuthConfiguration
 */
class GetOriginEndpointPolicyResponse extends Response
{
}
