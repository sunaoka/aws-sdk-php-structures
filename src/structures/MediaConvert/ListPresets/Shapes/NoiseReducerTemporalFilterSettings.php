<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4> $AggressiveMode
 * @property 'DISABLED'|'ENABLED'|'AUTO' $PostTemporalSharpening
 * @property 'LOW'|'MEDIUM'|'HIGH' $PostTemporalSharpeningStrength
 * @property int<-1, 3> $Speed
 * @property int<0, 16> $Strength
 */
class NoiseReducerTemporalFilterSettings extends Shape
{
    /**
     * @param array{
     *     AggressiveMode?: int<0, 4>,
     *     PostTemporalSharpening?: 'DISABLED'|'ENABLED'|'AUTO',
     *     PostTemporalSharpeningStrength?: 'LOW'|'MEDIUM'|'HIGH',
     *     Speed?: int<-1, 3>,
     *     Strength?: int<0, 16>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
