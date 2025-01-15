<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeID\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property NormalizedValue|null $NormalizedValue
 * @property float|null $Confidence
 */
class AnalyzeIDDetections extends Shape
{
    /**
     * @param array{
     *     Text: string,
     *     NormalizedValue?: NormalizedValue|null,
     *     Confidence?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
