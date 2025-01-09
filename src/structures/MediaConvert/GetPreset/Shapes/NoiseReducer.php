<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetPreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BILATERAL'|'MEAN'|'GAUSSIAN'|'LANCZOS'|'SHARPEN'|'CONSERVE'|'SPATIAL'|'TEMPORAL' $Filter
 * @property NoiseReducerFilterSettings $FilterSettings
 * @property NoiseReducerSpatialFilterSettings $SpatialFilterSettings
 * @property NoiseReducerTemporalFilterSettings $TemporalFilterSettings
 */
class NoiseReducer extends Shape
{
    /**
     * @param array{
     *     Filter?: 'BILATERAL'|'MEAN'|'GAUSSIAN'|'LANCZOS'|'SHARPEN'|'CONSERVE'|'SPATIAL'|'TEMPORAL',
     *     FilterSettings?: NoiseReducerFilterSettings,
     *     SpatialFilterSettings?: NoiseReducerSpatialFilterSettings,
     *     TemporalFilterSettings?: NoiseReducerTemporalFilterSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
