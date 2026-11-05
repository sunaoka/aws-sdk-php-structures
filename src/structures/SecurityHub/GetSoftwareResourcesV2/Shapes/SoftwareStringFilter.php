<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetSoftwareResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AccountId'|'PackageName'|'PackageVersion'|'PackageType'|'Region'|'ResourceRegion'|'ResourceType'|'ResourceId'|'ResourceProvider'|'ResourceOwnerAccountId'|'ResourceOwnerOrgId'|'ResourceCloudPartition'|null $FieldName
 * @property StringFilter|null $Filter
 */
class SoftwareStringFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'AccountId'|'PackageName'|'PackageVersion'|'PackageType'|'Region'|'ResourceRegion'|'ResourceType'|'ResourceId'|'ResourceProvider'|'ResourceOwnerAccountId'|'ResourceOwnerOrgId'|'ResourceCloudPartition'|null,
     *     Filter?: StringFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
