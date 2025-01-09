<?php

namespace Sunaoka\Aws\Structures\MediaPackage\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH'|'DATERANGE' $AdMarkers
 * @property string $Id
 * @property bool $IncludeIframeOnlyStream
 * @property string $ManifestName
 * @property 'NONE'|'EVENT'|'VOD' $PlaylistType
 * @property int $PlaylistWindowSeconds
 * @property int $ProgramDateTimeIntervalSeconds
 * @property string $Url
 */
class HlsManifest extends Shape
{
    /**
     * @param array{
     *     AdMarkers?: 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH'|'DATERANGE',
     *     Id: string,
     *     IncludeIframeOnlyStream?: bool,
     *     ManifestName?: string,
     *     PlaylistType?: 'NONE'|'EVENT'|'VOD',
     *     PlaylistWindowSeconds?: int,
     *     ProgramDateTimeIntervalSeconds?: int,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
