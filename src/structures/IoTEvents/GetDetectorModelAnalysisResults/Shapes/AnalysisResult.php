<?php

namespace Sunaoka\Aws\Structures\IoTEvents\GetDetectorModelAnalysisResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property 'INFO'|'WARNING'|'ERROR'|null $level
 * @property string|null $message
 * @property list<AnalysisResultLocation>|null $locations
 */
class AnalysisResult extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     level?: 'INFO'|'WARNING'|'ERROR'|null,
     *     message?: string|null,
     *     locations?: list<AnalysisResultLocation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
