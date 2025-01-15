<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetAnomalyGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DimensionValue
 * @property double|null $ContributionScore
 */
class DimensionValueContribution extends Shape
{
    /**
     * @param array{
     *     DimensionValue?: string|null,
     *     ContributionScore?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
