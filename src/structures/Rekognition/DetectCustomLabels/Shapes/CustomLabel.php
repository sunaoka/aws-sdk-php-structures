<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectCustomLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property float $Confidence
 * @property Geometry $Geometry
 */
class CustomLabel extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Confidence?: float,
     *     Geometry?: Geometry
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
