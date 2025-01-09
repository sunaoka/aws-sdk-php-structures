<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION' $AudioDuration
 * @property 'INCLUDE'|'EXCLUDE' $CslgAtom
 * @property int $CttsVersion
 * @property 'INCLUDE'|'EXCLUDE' $FreeSpaceBox
 * @property 'PROGRESSIVE_DOWNLOAD'|'NORMAL' $MoovPlacement
 * @property string $Mp4MajorBrand
 */
class Mp4Settings extends Shape
{
    /**
     * @param array{
     *     AudioDuration?: 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION',
     *     CslgAtom?: 'INCLUDE'|'EXCLUDE',
     *     CttsVersion?: int,
     *     FreeSpaceBox?: 'INCLUDE'|'EXCLUDE',
     *     MoovPlacement?: 'PROGRESSIVE_DOWNLOAD'|'NORMAL',
     *     Mp4MajorBrand?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
