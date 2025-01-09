<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERPOLATE'|'INTERPOLATE_TICKER'|'BLEND'|'BLEND_TICKER'|'LINEAR_INTERPOLATION' $Algorithm
 * @property 'FORCE_ALL_FRAMES'|'NORMAL' $Control
 * @property 'DEINTERLACE'|'INVERSE_TELECINE'|'ADAPTIVE' $Mode
 */
class Deinterlacer extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'INTERPOLATE'|'INTERPOLATE_TICKER'|'BLEND'|'BLEND_TICKER'|'LINEAR_INTERPOLATION',
     *     Control?: 'FORCE_ALL_FRAMES'|'NORMAL',
     *     Mode?: 'DEINTERLACE'|'INVERSE_TELECINE'|'ADAPTIVE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
