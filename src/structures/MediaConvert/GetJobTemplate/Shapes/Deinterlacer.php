<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERPOLATE'|'INTERPOLATE_TICKER'|'BLEND'|'BLEND_TICKER'|'LINEAR_INTERPOLATION'|null $Algorithm
 * @property 'FORCE_ALL_FRAMES'|'NORMAL'|null $Control
 * @property 'DEINTERLACE'|'INVERSE_TELECINE'|'ADAPTIVE'|null $Mode
 */
class Deinterlacer extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'INTERPOLATE'|'INTERPOLATE_TICKER'|'BLEND'|'BLEND_TICKER'|'LINEAR_INTERPOLATION'|null,
     *     Control?: 'FORCE_ALL_FRAMES'|'NORMAL'|null,
     *     Mode?: 'DEINTERLACE'|'INVERSE_TELECINE'|'ADAPTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
