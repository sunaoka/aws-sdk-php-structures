<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property 'TS'|'CMAF' $ContainerType
 * @property Shapes\Segment $Segment
 * @property string $ClientToken
 * @property string $Description
 * @property int $StartoverWindowSeconds
 * @property list<Shapes\CreateHlsManifestConfiguration> $HlsManifests
 * @property list<Shapes\CreateLowLatencyHlsManifestConfiguration> $LowLatencyHlsManifests
 * @property list<Shapes\CreateDashManifestConfiguration> $DashManifests
 * @property Shapes\ForceEndpointErrorConfiguration $ForceEndpointErrorConfiguration
 * @property array<string, string> $Tags
 */
class CreateOriginEndpointRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     OriginEndpointName: string,
     *     ContainerType: 'TS'|'CMAF',
     *     Segment?: Shapes\Segment,
     *     ClientToken?: string,
     *     Description?: string,
     *     StartoverWindowSeconds?: int,
     *     HlsManifests?: list<Shapes\CreateHlsManifestConfiguration>,
     *     LowLatencyHlsManifests?: list<Shapes\CreateLowLatencyHlsManifestConfiguration>,
     *     DashManifests?: list<Shapes\CreateDashManifestConfiguration>,
     *     ForceEndpointErrorConfiguration?: Shapes\ForceEndpointErrorConfiguration,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
