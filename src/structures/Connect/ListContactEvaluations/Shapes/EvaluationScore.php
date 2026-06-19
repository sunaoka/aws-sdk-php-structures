<?php

namespace Sunaoka\Aws\Structures\Connect\ListContactEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Percentage
 * @property bool|null $NotApplicable
 * @property bool|null $AutomaticFail
 * @property double|null $AppliedWeight
 * @property int|null $EarnedPoints
 * @property int|null $MaxBasePoint
 * @property 'NEEDS_IMPROVEMENT'|'EXCEEDS_EXPECTATIONS'|null $PerformanceCategory
 */
class EvaluationScore extends Shape
{
    /**
     * @param array{
     *     Percentage?: double|null,
     *     NotApplicable?: bool|null,
     *     AutomaticFail?: bool|null,
     *     AppliedWeight?: double|null,
     *     EarnedPoints?: int|null,
     *     MaxBasePoint?: int|null,
     *     PerformanceCategory?: 'NEEDS_IMPROVEMENT'|'EXCEEDS_EXPECTATIONS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
