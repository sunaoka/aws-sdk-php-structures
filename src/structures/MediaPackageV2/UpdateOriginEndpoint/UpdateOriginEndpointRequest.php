<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property 'TS'|'CMAF' $ContainerType
 * @property Shapes\Segment $Segment
 * @property string $Description
 * @property int<60, 1209600> $StartoverWindowSeconds
 * @property list<Shapes\CreateHlsManifestConfiguration> $HlsManifests
 * @property list<Shapes\CreateLowLatencyHlsManifestConfiguration> $LowLatencyHlsManifests
 * @property list<Shapes\CreateDashManifestConfiguration> $DashManifests
 * @property Shapes\ForceEndpointErrorConfiguration $ForceEndpointErrorConfiguration
 * @property string $ETag
 */
class UpdateOriginEndpointRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     OriginEndpointName: string,
     *     ContainerType: 'TS'|'CMAF',
     *     Segment?: Shapes\Segment,
     *     Description?: string,
     *     StartoverWindowSeconds?: int<60, 1209600>,
     *     HlsManifests?: list<Shapes\CreateHlsManifestConfiguration>,
     *     LowLatencyHlsManifests?: list<Shapes\CreateLowLatencyHlsManifestConfiguration>,
     *     DashManifests?: list<Shapes\CreateDashManifestConfiguration>,
     *     ForceEndpointErrorConfiguration?: Shapes\ForceEndpointErrorConfiguration,
     *     ETag?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
