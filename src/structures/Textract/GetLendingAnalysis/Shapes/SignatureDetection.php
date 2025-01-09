<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $Confidence
 * @property Geometry $Geometry
 */
class SignatureDetection extends Shape
{
    /**
     * @param array{
     *     Confidence?: float,
     *     Geometry?: Geometry
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
