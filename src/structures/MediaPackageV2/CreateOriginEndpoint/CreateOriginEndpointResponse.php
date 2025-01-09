<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property 'TS'|'CMAF' $ContainerType
 * @property Shapes\Segment $Segment
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property string $Description
 * @property int $StartoverWindowSeconds
 * @property list<Shapes\GetHlsManifestConfiguration> $HlsManifests
 * @property list<Shapes\GetLowLatencyHlsManifestConfiguration> $LowLatencyHlsManifests
 * @property list<Shapes\GetDashManifestConfiguration> $DashManifests
 * @property Shapes\ForceEndpointErrorConfiguration $ForceEndpointErrorConfiguration
 * @property string $ETag
 * @property array<string, string> $Tags
 */
class CreateOriginEndpointResponse extends Response
{
}
