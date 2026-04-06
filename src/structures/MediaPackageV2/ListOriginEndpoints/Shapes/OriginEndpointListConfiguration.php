<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\ListOriginEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property 'TS'|'CMAF' $ContainerType
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property list<ListHlsManifestConfiguration>|null $HlsManifests
 * @property list<ListLowLatencyHlsManifestConfiguration>|null $LowLatencyHlsManifests
 * @property list<ListDashManifestConfiguration>|null $DashManifests
 * @property ForceEndpointErrorConfiguration|null $ForceEndpointErrorConfiguration
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
     *     Description?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     ModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     HlsManifests?: list<ListHlsManifestConfiguration>|null,
     *     LowLatencyHlsManifests?: list<ListLowLatencyHlsManifestConfiguration>|null,
     *     DashManifests?: list<ListDashManifestConfiguration>|null,
     *     ForceEndpointErrorConfiguration?: ForceEndpointErrorConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
