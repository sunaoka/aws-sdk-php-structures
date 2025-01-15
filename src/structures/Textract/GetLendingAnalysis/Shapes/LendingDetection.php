<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Text
 * @property 'SELECTED'|'NOT_SELECTED'|null $SelectionStatus
 * @property Geometry|null $Geometry
 * @property float|null $Confidence
 */
class LendingDetection extends Shape
{
    /**
     * @param array{
     *     Text?: string|null,
     *     SelectionStatus?: 'SELECTED'|'NOT_SELECTED'|null,
     *     Geometry?: Geometry|null,
     *     Confidence?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
