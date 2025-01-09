<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SINGLE_PASS'|'MULTI_PASS' $QualityTuningLevel
 */
class AvcIntraUhdSettings extends Shape
{
    /**
     * @param array{QualityTuningLevel?: 'SINGLE_PASS'|'MULTI_PASS'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
