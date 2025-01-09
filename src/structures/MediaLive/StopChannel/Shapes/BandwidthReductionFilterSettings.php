<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'SHARPENING_1'|'SHARPENING_2'|'SHARPENING_3' $PostFilterSharpening
 * @property 'AUTO'|'STRENGTH_1'|'STRENGTH_2'|'STRENGTH_3'|'STRENGTH_4' $Strength
 */
class BandwidthReductionFilterSettings extends Shape
{
    /**
     * @param array{
     *     PostFilterSharpening?: 'DISABLED'|'SHARPENING_1'|'SHARPENING_2'|'SHARPENING_3',
     *     Strength?: 'AUTO'|'STRENGTH_1'|'STRENGTH_2'|'STRENGTH_3'|'STRENGTH_4'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
