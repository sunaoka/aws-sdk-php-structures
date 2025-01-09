<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUDE'|'EXCLUDE' $ClapAtom
 * @property 'INCLUDE'|'EXCLUDE' $CslgAtom
 * @property 'XDCAM'|'MPEG' $Mpeg2FourCCControl
 * @property 'OMNEON'|'NONE' $PaddingControl
 * @property 'SELF_CONTAINED'|'EXTERNAL' $Reference
 */
class MovSettings extends Shape
{
    /**
     * @param array{
     *     ClapAtom?: 'INCLUDE'|'EXCLUDE',
     *     CslgAtom?: 'INCLUDE'|'EXCLUDE',
     *     Mpeg2FourCCControl?: 'XDCAM'|'MPEG',
     *     PaddingControl?: 'OMNEON'|'NONE',
     *     Reference?: 'SELF_CONTAINED'|'EXTERNAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
