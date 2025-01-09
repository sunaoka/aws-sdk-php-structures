<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeExpense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property Geometry $Geometry
 * @property float $Confidence
 */
class ExpenseDetection extends Shape
{
    /**
     * @param array{
     *     Text?: string,
     *     Geometry?: Geometry,
     *     Confidence?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
