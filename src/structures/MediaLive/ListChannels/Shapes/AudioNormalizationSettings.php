<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ITU_1770_1'|'ITU_1770_2'|'ITU_1770_3'|'ITU_1770_4'|null $Algorithm
 * @property 'CORRECT_AUDIO'|null $AlgorithmControl
 * @property double|null $TargetLkfs
 * @property 'NONE'|'TRUE_PEAK'|null $PeakCalculation
 * @property double|null $PeakLimiterThreshold
 */
class AudioNormalizationSettings extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'ITU_1770_1'|'ITU_1770_2'|'ITU_1770_3'|'ITU_1770_4'|null,
     *     AlgorithmControl?: 'CORRECT_AUDIO'|null,
     *     TargetLkfs?: double|null,
     *     PeakCalculation?: 'NONE'|'TRUE_PEAK'|null,
     *     PeakLimiterThreshold?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
