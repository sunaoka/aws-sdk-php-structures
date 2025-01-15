<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $Confidence
 * @property Geometry|null $Geometry
 */
class SignatureDetection extends Shape
{
    /**
     * @param array{
     *     Confidence?: float|null,
     *     Geometry?: Geometry|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
