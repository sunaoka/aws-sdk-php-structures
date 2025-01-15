<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ITU_1770_1'|'ITU_1770_2'|null $Algorithm
 * @property 'CORRECT_AUDIO'|null $AlgorithmControl
 * @property double|null $TargetLkfs
 */
class AudioNormalizationSettings extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'ITU_1770_1'|'ITU_1770_2'|null,
     *     AlgorithmControl?: 'CORRECT_AUDIO'|null,
     *     TargetLkfs?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
