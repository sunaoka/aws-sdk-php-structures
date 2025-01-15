<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectCustomLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property float|null $Confidence
 * @property Geometry|null $Geometry
 */
class CustomLabel extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Confidence?: float|null,
     *     Geometry?: Geometry|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
