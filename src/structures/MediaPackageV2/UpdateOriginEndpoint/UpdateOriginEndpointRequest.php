<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelGroupName
 * @property string $ChannelName
 * @property string $OriginEndpointName
 * @property 'TS'|'CMAF' $ContainerType
 * @property Shapes\Segment|null $Segment
 * @property string|null $Description
 * @property int<60, 1209600>|null $StartoverWindowSeconds
 * @property list<Shapes\CreateHlsManifestConfiguration>|null $HlsManifests
 * @property list<Shapes\CreateLowLatencyHlsManifestConfiguration>|null $LowLatencyHlsManifests
 */
class UpdateOriginEndpointRequest extends Request
{
    /**
     * @param array{
     *     ChannelGroupName: string,
     *     ChannelName: string,
     *     OriginEndpointName: string,
     *     ContainerType: 'TS'|'CMAF',
     *     Segment?: Shapes\Segment|null,
     *     Description?: string|null,
     *     StartoverWindowSeconds?: int<60, 1209600>|null,
     *     HlsManifests?: list<Shapes\CreateHlsManifestConfiguration>|null,
     *     LowLatencyHlsManifests?: list<Shapes\CreateLowLatencyHlsManifestConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
