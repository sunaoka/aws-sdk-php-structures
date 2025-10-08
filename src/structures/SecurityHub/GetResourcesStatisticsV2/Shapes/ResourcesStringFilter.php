<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'resource_arn'|'resource_id'|'account_id'|'region'|'resource_category'|'resource_type'|'resource_name'|'findings_summary.finding_type'|'findings_summary.product_name'|null $FieldName
 * @property StringFilter|null $Filter
 */
class ResourcesStringFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'resource_arn'|'resource_id'|'account_id'|'region'|'resource_category'|'resource_type'|'resource_name'|'findings_summary.finding_type'|'findings_summary.product_name'|null,
     *     Filter?: StringFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
