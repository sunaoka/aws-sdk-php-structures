<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'SHARPENING_1'|'SHARPENING_2'|'SHARPENING_3'|null $PostFilterSharpening
 * @property 'AUTO'|'STRENGTH_1'|'STRENGTH_2'|'STRENGTH_3'|'STRENGTH_4'|null $Strength
 */
class BandwidthReductionFilterSettings extends Shape
{
    /**
     * @param array{
     *     PostFilterSharpening?: 'DISABLED'|'SHARPENING_1'|'SHARPENING_2'|'SHARPENING_3'|null,
     *     Strength?: 'AUTO'|'STRENGTH_1'|'STRENGTH_2'|'STRENGTH_3'|'STRENGTH_4'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
