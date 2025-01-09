<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetAnomalyGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DimensionName
 * @property list<DimensionValueContribution> $DimensionValueContributionList
 */
class DimensionContribution extends Shape
{
    /**
     * @param array{
     *     DimensionName?: string,
     *     DimensionValueContributionList?: list<DimensionValueContribution>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
