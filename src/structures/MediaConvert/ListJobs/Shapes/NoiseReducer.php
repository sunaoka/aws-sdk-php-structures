<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BILATERAL'|'MEAN'|'GAUSSIAN'|'LANCZOS'|'SHARPEN'|'CONSERVE'|'SPATIAL'|'TEMPORAL'|null $Filter
 * @property NoiseReducerFilterSettings|null $FilterSettings
 * @property NoiseReducerSpatialFilterSettings|null $SpatialFilterSettings
 * @property NoiseReducerTemporalFilterSettings|null $TemporalFilterSettings
 */
class NoiseReducer extends Shape
{
    /**
     * @param array{
     *     Filter?: 'BILATERAL'|'MEAN'|'GAUSSIAN'|'LANCZOS'|'SHARPEN'|'CONSERVE'|'SPATIAL'|'TEMPORAL'|null,
     *     FilterSettings?: NoiseReducerFilterSettings|null,
     *     SpatialFilterSettings?: NoiseReducerSpatialFilterSettings|null,
     *     TemporalFilterSettings?: NoiseReducerTemporalFilterSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
