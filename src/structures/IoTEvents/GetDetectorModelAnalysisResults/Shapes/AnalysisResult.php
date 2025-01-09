<?php

namespace Sunaoka\Aws\Structures\IoTEvents\GetDetectorModelAnalysisResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 * @property 'INFO'|'WARNING'|'ERROR' $level
 * @property string $message
 * @property list<AnalysisResultLocation> $locations
 */
class AnalysisResult extends Shape
{
    /**
     * @param array{
     *     type?: string,
     *     level?: 'INFO'|'WARNING'|'ERROR',
     *     message?: string,
     *     locations?: list<AnalysisResultLocation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
