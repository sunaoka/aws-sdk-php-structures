<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EstimatedMonthlySavings
 * @property string $CurrencyCode
 */
class TerminateRecommendationDetail extends Shape
{
    /**
     * @param array{
     *     EstimatedMonthlySavings?: string,
     *     CurrencyCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
