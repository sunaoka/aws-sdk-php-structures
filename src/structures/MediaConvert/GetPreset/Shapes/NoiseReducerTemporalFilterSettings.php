<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AggressiveMode
 * @property 'DISABLED'|'ENABLED'|'AUTO' $PostTemporalSharpening
 * @property 'LOW'|'MEDIUM'|'HIGH' $PostTemporalSharpeningStrength
 * @property int $Speed
 * @property int $Strength
 */
class NoiseReducerTemporalFilterSettings extends Shape
{
    /**
     * @param array{
     *     AggressiveMode?: int,
     *     PostTemporalSharpening?: 'DISABLED'|'ENABLED'|'AUTO',
     *     PostTemporalSharpeningStrength?: 'LOW'|'MEDIUM'|'HIGH',
     *     Speed?: int,
     *     Strength?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
