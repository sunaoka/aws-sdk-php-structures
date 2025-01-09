<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ITU_BS_1770_1'|'ITU_BS_1770_2'|'ITU_BS_1770_3'|'ITU_BS_1770_4' $Algorithm
 * @property 'CORRECT_AUDIO'|'MEASURE_ONLY' $AlgorithmControl
 * @property int<-70, 0> $CorrectionGateLevel
 * @property 'LOG'|'DONT_LOG' $LoudnessLogging
 * @property 'TRUE_PEAK'|'NONE' $PeakCalculation
 * @property double $TargetLkfs
 * @property double $TruePeakLimiterThreshold
 */
class AudioNormalizationSettings extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'ITU_BS_1770_1'|'ITU_BS_1770_2'|'ITU_BS_1770_3'|'ITU_BS_1770_4',
     *     AlgorithmControl?: 'CORRECT_AUDIO'|'MEASURE_ONLY',
     *     CorrectionGateLevel?: int<-70, 0>,
     *     LoudnessLogging?: 'LOG'|'DONT_LOG',
     *     PeakCalculation?: 'TRUE_PEAK'|'NONE',
     *     TargetLkfs?: double,
     *     TruePeakLimiterThreshold?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
