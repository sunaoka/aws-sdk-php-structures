<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EstimatedMonthlySavings
 * @property string|null $CurrencyCode
 */
class TerminateRecommendationDetail extends Shape
{
    /**
     * @param array{
     *     EstimatedMonthlySavings?: string|null,
     *     CurrencyCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
