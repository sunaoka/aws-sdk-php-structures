<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Text
 * @property 'SELECTED'|'NOT_SELECTED' $SelectionStatus
 * @property Geometry $Geometry
 * @property float $Confidence
 */
class LendingDetection extends Shape
{
    /**
     * @param array{
     *     Text?: string,
     *     SelectionStatus?: 'SELECTED'|'NOT_SELECTED',
     *     Geometry?: Geometry,
     *     Confidence?: float
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
