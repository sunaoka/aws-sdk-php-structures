<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeExpense\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Code
 * @property float|null $Confidence
 */
class ExpenseCurrency extends Shape
{
    /**
     * @param array{
     *     Code?: string|null,
     *     Confidence?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
