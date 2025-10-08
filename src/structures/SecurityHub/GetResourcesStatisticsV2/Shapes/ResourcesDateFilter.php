<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'resource_detail_capture_time_dt'|'resource_creation_time_dt'|null $FieldName
 * @property DateFilter|null $Filter
 */
class ResourcesDateFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'resource_detail_capture_time_dt'|'resource_creation_time_dt'|null,
     *     Filter?: DateFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
