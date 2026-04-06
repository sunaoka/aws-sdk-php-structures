<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'finding_info.created_time_dt'|'finding_info.first_seen_time_dt'|'finding_info.last_seen_time_dt'|'finding_info.modified_time_dt'|'resources.image.created_time_dt'|'resources.image.last_used_time_dt'|'resources.modified_time_dt'|null $FieldName
 * @property DateFilter|null $Filter
 */
class OcsfDateFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'finding_info.created_time_dt'|'finding_info.first_seen_time_dt'|'finding_info.last_seen_time_dt'|'finding_info.modified_time_dt'|'resources.image.created_time_dt'|'resources.image.last_used_time_dt'|'resources.modified_time_dt'|null,
     *     Filter?: DateFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
