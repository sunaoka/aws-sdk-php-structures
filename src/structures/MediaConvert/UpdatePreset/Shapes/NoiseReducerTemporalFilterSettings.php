<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4>|null $AggressiveMode
 * @property 'DISABLED'|'ENABLED'|'AUTO'|null $PostTemporalSharpening
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $PostTemporalSharpeningStrength
 * @property int<-1, 3>|null $Speed
 * @property int<0, 16>|null $Strength
 */
class NoiseReducerTemporalFilterSettings extends Shape
{
    /**
     * @param array{
     *     AggressiveMode?: int<0, 4>|null,
     *     PostTemporalSharpening?: 'DISABLED'|'ENABLED'|'AUTO'|null,
     *     PostTemporalSharpeningStrength?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     Speed?: int<-1, 3>|null,
     *     Strength?: int<0, 16>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
