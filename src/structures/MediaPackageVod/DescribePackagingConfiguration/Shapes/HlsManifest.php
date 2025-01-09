<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DescribePackagingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH' $AdMarkers
 * @property bool $IncludeIframeOnlyStream
 * @property string $ManifestName
 * @property int $ProgramDateTimeIntervalSeconds
 * @property bool $RepeatExtXKey
 * @property StreamSelection $StreamSelection
 */
class HlsManifest extends Shape
{
    /**
     * @param array{
     *     AdMarkers?: 'NONE'|'SCTE35_ENHANCED'|'PASSTHROUGH',
     *     IncludeIframeOnlyStream?: bool,
     *     ManifestName?: string,
     *     ProgramDateTimeIntervalSeconds?: int,
     *     RepeatExtXKey?: bool,
     *     StreamSelection?: StreamSelection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
