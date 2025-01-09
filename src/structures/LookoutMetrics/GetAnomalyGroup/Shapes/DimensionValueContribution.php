<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetAnomalyGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DimensionValue
 * @property double $ContributionScore
 */
class DimensionValueContribution extends Shape
{
    /**
     * @param array{
     *     DimensionValue?: string,
     *     ContributionScore?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
