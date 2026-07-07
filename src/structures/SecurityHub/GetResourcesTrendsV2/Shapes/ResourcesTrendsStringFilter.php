<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesTrendsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'account_id'|'region'|'resource_type'|'resource_category'|'resource_cloud_provider'|'resource_region'|'resource_owner_id'|'resource_owner_organization_id'|null $FieldName
 * @property StringFilter|null $Filter
 */
class ResourcesTrendsStringFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'account_id'|'region'|'resource_type'|'resource_category'|'resource_cloud_provider'|'resource_region'|'resource_owner_id'|'resource_owner_organization_id'|null,
     *     Filter?: StringFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
