<?php

namespace Sunaoka\Aws\Structures\IoTEvents\GetDetectorModelAnalysisResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 */
class AnalysisResultLocation extends Shape
{
    /**
     * @param array{path?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
