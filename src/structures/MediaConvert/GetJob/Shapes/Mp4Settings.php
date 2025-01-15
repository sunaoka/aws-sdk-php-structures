<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION'|null $AudioDuration
 * @property 'INCLUDE'|'EXCLUDE'|null $CslgAtom
 * @property int<0, 1>|null $CttsVersion
 * @property 'INCLUDE'|'EXCLUDE'|null $FreeSpaceBox
 * @property 'PROGRESSIVE_DOWNLOAD'|'NORMAL'|null $MoovPlacement
 * @property string|null $Mp4MajorBrand
 */
class Mp4Settings extends Shape
{
    /**
     * @param array{
     *     AudioDuration?: 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION'|null,
     *     CslgAtom?: 'INCLUDE'|'EXCLUDE'|null,
     *     CttsVersion?: int<0, 1>|null,
     *     FreeSpaceBox?: 'INCLUDE'|'EXCLUDE'|null,
     *     MoovPlacement?: 'PROGRESSIVE_DOWNLOAD'|'NORMAL'|null,
     *     Mp4MajorBrand?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
