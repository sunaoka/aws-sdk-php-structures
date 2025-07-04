<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\CreateOriginEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property 'TS'|'CMAF'|'ISM' $ContainerType
 * @property Shapes\Segment|null $Segment
 * @property string|null $ClientToken
 * @property string|null $Description
 * @property int<60, 1209600>|null $StartoverWindowSeconds
 * @property list<Shapes\CreateHlsManifestConfiguration>|null $HlsManifests
 * @property list<Shapes\CreateLowLatencyHlsManifestConfiguration>|null $LowLatencyHlsManifests
 * @property list<Shapes\CreateDashManifestConfiguration>|null $DashManifests
 * @property list<Shapes\CreateMssManifestConfiguration>|null $MssManifests
 * @property Shapes\ForceEndpointErrorConfiguration|null $ForceEndpointErrorConfiguration
 * @property array<string, string>|null $Tags
 */
class CreateOriginEndpointRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     OriginEndpointName: string,
     *     ContainerType: 'TS'|'CMAF'|'ISM',
     *     Segment?: Shapes\Segment|null,
     *     ClientToken?: string|null,
     *     Description?: string|null,
     *     StartoverWindowSeconds?: int<60, 1209600>|null,
     *     HlsManifests?: list<Shapes\CreateHlsManifestConfiguration>|null,
     *     LowLatencyHlsManifests?: list<Shapes\CreateLowLatencyHlsManifestConfiguration>|null,
     *     DashManifests?: list<Shapes\CreateDashManifestConfiguration>|null,
     *     MssManifests?: list<Shapes\CreateMssManifestConfiguration>|null,
     *     ForceEndpointErrorConfiguration?: Shapes\ForceEndpointErrorConfiguration|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
