<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH'|null $AdMarkers
 * @property bool|null $IncludeIframeOnlyStream
 * @property string|null $ManifestName
 * @property int|null $ProgramDateTimeIntervalSeconds
 * @property bool|null $RepeatExtXKey
 * @property StreamSelection|null $StreamSelection
 */
class HlsManifest extends Shape
{
    /**
     * @param array{
     *     AdMarkers?: 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH'|null,
     *     IncludeIframeOnlyStream?: bool|null,
     *     ManifestName?: string|null,
     *     ProgramDateTimeIntervalSeconds?: int|null,
     *     RepeatExtXKey?: bool|null,
     *     StreamSelection?: StreamSelection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
