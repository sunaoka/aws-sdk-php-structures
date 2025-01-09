<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterGroupId
 * @property list<Filter> $Filters
 * @property FilterScopeConfiguration $ScopeConfiguration
 * @property 'ENABLED'|'DISABLED' $Status
 * @property 'ALL_DATASETS'|'SINGLE_DATASET' $CrossDataset
 */
class FilterGroup extends Shape
{
    /**
     * @param array{
     *     FilterGroupId: string,
     *     Filters: list<Filter>,
     *     ScopeConfiguration: FilterScopeConfiguration,
     *     Status?: 'ENABLED'|'DISABLED',
     *     CrossDataset: 'ALL_DATASETS'|'SINGLE_DATASET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
