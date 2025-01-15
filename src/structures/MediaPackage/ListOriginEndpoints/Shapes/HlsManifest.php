<?php

namespace Sunaoka\Aws\Structures\MediaPackage\ListOriginEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH'|'DATERANGE'|null $AdMarkers
 * @property string $Id
 * @property bool|null $IncludeIframeOnlyStream
 * @property string|null $ManifestName
 * @property 'NONE'|'EVENT'|'VOD'|null $PlaylistType
 * @property int|null $PlaylistWindowSeconds
 * @property int|null $ProgramDateTimeIntervalSeconds
 * @property string|null $Url
 */
class HlsManifest extends Shape
{
    /**
     * @param array{
     *     AdMarkers?: 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH'|'DATERANGE'|null,
     *     Id: string,
     *     IncludeIframeOnlyStream?: bool|null,
     *     ManifestName?: string|null,
     *     PlaylistType?: 'NONE'|'EVENT'|'VOD'|null,
     *     PlaylistWindowSeconds?: int|null,
     *     ProgramDateTimeIntervalSeconds?: int|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
