<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccountId'|'AccountName'|'Region'|'ResourceProvider'|'ResourceOwnerAccountId'|'ResourceOwnerOrgId'|'ResourceCloudPartition'|'ResourceRegion'|'ResourceCategory'|'ResourceType'|'ResourceName'|'FindingsSummary.FindingType' $GroupByField
 * @property ResourcesFilters|null $Filters
 */
class ResourceGroupByRule extends Shape
{
    /**
     * @param array{
     *     GroupByField: 'AccountId'|'AccountName'|'Region'|'ResourceProvider'|'ResourceOwnerAccountId'|'ResourceOwnerOrgId'|'ResourceCloudPartition'|'ResourceRegion'|'ResourceCategory'|'ResourceType'|'ResourceName'|'FindingsSummary.FindingType',
     *     Filters?: ResourcesFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
