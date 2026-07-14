<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ResourceGuid'|'ResourceId'|'AccountId'|'AccountName'|'Region'|'ResourceProvider'|'ResourceOwnerAccountId'|'ResourceOwnerOrgId'|'ResourceCloudPartition'|'ResourceRegion'|'ResourceCategory'|'ResourceType'|'ResourceName'|'FindingsSummary.FindingType'|'FindingsSummary.ProductName'|'ResourceSubCategory'|'DiscoveryType'|'ResourceInfo.AIDetails.HostResourceGuid'|'ResourceInfo.AIDetails.HostResourceType'|'ResourceInfo.AIDetails.CanonicalId'|null $FieldName
 * @property StringFilter|null $Filter
 */
class ResourcesStringFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'ResourceGuid'|'ResourceId'|'AccountId'|'AccountName'|'Region'|'ResourceProvider'|'ResourceOwnerAccountId'|'ResourceOwnerOrgId'|'ResourceCloudPartition'|'ResourceRegion'|'ResourceCategory'|'ResourceType'|'ResourceName'|'FindingsSummary.FindingType'|'FindingsSummary.ProductName'|'ResourceSubCategory'|'DiscoveryType'|'ResourceInfo.AIDetails.HostResourceGuid'|'ResourceInfo.AIDetails.HostResourceType'|'ResourceInfo.AIDetails.CanonicalId'|null,
     *     Filter?: StringFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
