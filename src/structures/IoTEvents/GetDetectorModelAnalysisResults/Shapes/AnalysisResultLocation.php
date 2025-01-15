<?php

namespace Sunaoka\Aws\Structures\IoTEvents\GetDetectorModelAnalysisResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $path
 */
class AnalysisResultLocation extends Shape
{
    /**
     * @param array{path?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
