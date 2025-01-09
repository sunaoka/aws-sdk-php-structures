<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListOriginEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property 'TS'|'CMAF' $ContainerType
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property list<ListHlsManifestConfiguration> $HlsManifests
 * @property list<ListLowLatencyHlsManifestConfiguration> $LowLatencyHlsManifests
 * @property list<ListDashManifestConfiguration> $DashManifests
 * @property ForceEndpointErrorConfiguration $ForceEndpointErrorConfiguration
 */
class OriginEndpointListConfiguration extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     OriginEndpointName: string,
     *     ContainerType: 'TS'|'CMAF',
     *     Description?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     ModifiedAt?: \Aws\Api\DateTimeResult,
     *     HlsManifests?: list<ListHlsManifestConfiguration>,
     *     LowLatencyHlsManifests?: list<ListLowLatencyHlsManifestConfiguration>,
     *     DashManifests?: list<ListDashManifestConfiguration>,
     *     ForceEndpointErrorConfiguration?: ForceEndpointErrorConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
