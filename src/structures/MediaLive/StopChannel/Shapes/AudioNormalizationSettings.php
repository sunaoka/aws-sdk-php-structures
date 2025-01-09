<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ITU_1770_1'|'ITU_1770_2' $Algorithm
 * @property 'CORRECT_AUDIO' $AlgorithmControl
 * @property double $TargetLkfs
 */
class AudioNormalizationSettings extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'ITU_1770_1'|'ITU_1770_2',
     *     AlgorithmControl?: 'CORRECT_AUDIO',
     *     TargetLkfs?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
