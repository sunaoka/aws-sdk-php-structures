<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'account_id'|'region'|'resource_category'|'resource_type'|'resource_name'|'findings_summary.finding_type' $GroupByField
 * @property ResourcesFilters|null $Filters
 */
class ResourceGroupByRule extends Shape
{
    /**
     * @param array{
     *     GroupByField: 'account_id'|'region'|'resource_category'|'resource_type'|'resource_name'|'findings_summary.finding_type',
     *     Filters?: ResourcesFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
