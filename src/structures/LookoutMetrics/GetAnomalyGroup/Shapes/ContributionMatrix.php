<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetAnomalyGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionContribution> $DimensionContributionList
 */
class ContributionMatrix extends Shape
{
    /**
     * @param array{DimensionContributionList?: list<DimensionContribution>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
