<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColorCorrector $ColorCorrector
 * @property Deinterlacer $Deinterlacer
 * @property DolbyVision $DolbyVision
 * @property Hdr10Plus $Hdr10Plus
 * @property ImageInserter $ImageInserter
 * @property NoiseReducer $NoiseReducer
 * @property PartnerWatermarking $PartnerWatermarking
 * @property TimecodeBurnin $TimecodeBurnin
 */
class VideoPreprocessor extends Shape
{
    /**
     * @param array{
     *     ColorCorrector?: ColorCorrector,
     *     Deinterlacer?: Deinterlacer,
     *     DolbyVision?: DolbyVision,
     *     Hdr10Plus?: Hdr10Plus,
     *     ImageInserter?: ImageInserter,
     *     NoiseReducer?: NoiseReducer,
     *     PartnerWatermarking?: PartnerWatermarking,
     *     TimecodeBurnin?: TimecodeBurnin
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
