<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property NormalizedValue $NormalizedValue
 * @property float $Confidence
 */
class AnalyzeIDDetections extends Shape
{
    /**
     * @param array{
     *     Text: string,
     *     NormalizedValue?: NormalizedValue,
     *     Confidence?: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
