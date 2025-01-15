<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'DISABLED'|'ENABLED'|null $PostFilterSharpening
 * @property 'AUTO'|'STRENGTH_1'|'STRENGTH_2'|'STRENGTH_3'|'STRENGTH_4'|'STRENGTH_5'|'STRENGTH_6'|'STRENGTH_7'|'STRENGTH_8'|'STRENGTH_9'|'STRENGTH_10'|'STRENGTH_11'|'STRENGTH_12'|'STRENGTH_13'|'STRENGTH_14'|'STRENGTH_15'|'STRENGTH_16'|null $Strength
 */
class TemporalFilterSettings extends Shape
{
    /**
     * @param array{
     *     PostFilterSharpening?: 'AUTO'|'DISABLED'|'ENABLED'|null,
     *     Strength?: 'AUTO'|'STRENGTH_1'|'STRENGTH_2'|'STRENGTH_3'|'STRENGTH_4'|'STRENGTH_5'|'STRENGTH_6'|'STRENGTH_7'|'STRENGTH_8'|'STRENGTH_9'|'STRENGTH_10'|'STRENGTH_11'|'STRENGTH_12'|'STRENGTH_13'|'STRENGTH_14'|'STRENGTH_15'|'STRENGTH_16'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
