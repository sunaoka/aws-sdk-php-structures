<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ITU_BS_1770_1'|'ITU_BS_1770_2'|'ITU_BS_1770_3'|'ITU_BS_1770_4'|null $Algorithm
 * @property 'CORRECT_AUDIO'|'MEASURE_ONLY'|null $AlgorithmControl
 * @property int<-70, 0>|null $CorrectionGateLevel
 * @property 'LOG'|'DONT_LOG'|null $LoudnessLogging
 * @property 'TRUE_PEAK'|'NONE'|null $PeakCalculation
 * @property double|null $TargetLkfs
 * @property double|null $TruePeakLimiterThreshold
 */
class AudioNormalizationSettings extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'ITU_BS_1770_1'|'ITU_BS_1770_2'|'ITU_BS_1770_3'|'ITU_BS_1770_4'|null,
     *     AlgorithmControl?: 'CORRECT_AUDIO'|'MEASURE_ONLY'|null,
     *     CorrectionGateLevel?: int<-70, 0>|null,
     *     LoudnessLogging?: 'LOG'|'DONT_LOG'|null,
     *     PeakCalculation?: 'TRUE_PEAK'|'NONE'|null,
     *     TargetLkfs?: double|null,
     *     TruePeakLimiterThreshold?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
