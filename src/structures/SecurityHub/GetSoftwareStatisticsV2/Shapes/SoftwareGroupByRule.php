<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSoftwareStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccountId'|'PackageName'|'PackageVersion'|'PackageType'|'Region'|'ResourceRegion'|'ResourceType'|'ResourceId'|'ResourceProvider'|'ResourceOwnerAccountId'|'ResourceOwnerOrgId'|'ResourceCloudPartition' $GroupByField
 * @property SoftwareFilters|null $Filters
 */
class SoftwareGroupByRule extends Shape
{
    /**
     * @param array{
     *     GroupByField: 'AccountId'|'PackageName'|'PackageVersion'|'PackageType'|'Region'|'ResourceRegion'|'ResourceType'|'ResourceId'|'ResourceProvider'|'ResourceOwnerAccountId'|'ResourceOwnerOrgId'|'ResourceCloudPartition',
     *     Filters?: SoftwareFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
