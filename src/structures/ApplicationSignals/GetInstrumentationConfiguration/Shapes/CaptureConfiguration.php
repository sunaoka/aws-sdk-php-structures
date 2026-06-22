<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetInstrumentationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CodeCaptureConfiguration|null $CodeCapture
 */
class CaptureConfiguration extends Shape
{
    /**
     * @param array{CodeCapture?: CodeCaptureConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
