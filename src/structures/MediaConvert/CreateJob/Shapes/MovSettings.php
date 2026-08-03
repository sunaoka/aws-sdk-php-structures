<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION'|null $AudioDuration
 * @property 'INCLUDE'|'EXCLUDE'|null $ClapAtom
 * @property 'INCLUDE'|'EXCLUDE'|null $CslgAtom
 * @property 'XDCAM'|'MPEG'|null $Mpeg2FourCCControl
 * @property 'OMNEON'|'NONE'|null $PaddingControl
 * @property 'SELF_CONTAINED'|'EXTERNAL'|null $Reference
 */
class MovSettings extends Shape
{
    /**
     * @param array{
     *     AudioDuration?: 'DEFAULT_CODEC_DURATION'|'MATCH_VIDEO_DURATION'|null,
     *     ClapAtom?: 'INCLUDE'|'EXCLUDE'|null,
     *     CslgAtom?: 'INCLUDE'|'EXCLUDE'|null,
     *     Mpeg2FourCCControl?: 'XDCAM'|'MPEG'|null,
     *     PaddingControl?: 'OMNEON'|'NONE'|null,
     *     Reference?: 'SELF_CONTAINED'|'EXTERNAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
