<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeExpense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Text
 * @property Geometry|null $Geometry
 * @property float|null $Confidence
 */
class ExpenseDetection extends Shape
{
    /**
     * @param array{
     *     Text?: string|null,
     *     Geometry?: Geometry|null,
     *     Confidence?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
