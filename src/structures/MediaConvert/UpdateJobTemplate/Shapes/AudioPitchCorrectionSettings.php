<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|null $SlowPalPitchCorrection
 */
class AudioPitchCorrectionSettings extends Shape
{
    /**
     * @param array{SlowPalPitchCorrection?: 'DISABLED'|'ENABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
