<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\GetAnomalyGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DimensionName
 * @property list<DimensionValueContribution>|null $DimensionValueContributionList
 */
class DimensionContribution extends Shape
{
    /**
     * @param array{
     *     DimensionName?: string|null,
     *     DimensionValueContributionList?: list<DimensionValueContribution>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
