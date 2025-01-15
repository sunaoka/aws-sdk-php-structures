<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColorCorrector|null $ColorCorrector
 * @property Deinterlacer|null $Deinterlacer
 * @property DolbyVision|null $DolbyVision
 * @property Hdr10Plus|null $Hdr10Plus
 * @property ImageInserter|null $ImageInserter
 * @property NoiseReducer|null $NoiseReducer
 * @property PartnerWatermarking|null $PartnerWatermarking
 * @property TimecodeBurnin|null $TimecodeBurnin
 */
class VideoPreprocessor extends Shape
{
    /**
     * @param array{
     *     ColorCorrector?: ColorCorrector|null,
     *     Deinterlacer?: Deinterlacer|null,
     *     DolbyVision?: DolbyVision|null,
     *     Hdr10Plus?: Hdr10Plus|null,
     *     ImageInserter?: ImageInserter|null,
     *     NoiseReducer?: NoiseReducer|null,
     *     PartnerWatermarking?: PartnerWatermarking|null,
     *     TimecodeBurnin?: TimecodeBurnin|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
