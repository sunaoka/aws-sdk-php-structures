<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'activity_id'|'compliance.status_id'|'confidence_score'|'severity_id'|'status_id'|'finding_info.related_events_count'|null $FieldName
 * @property NumberFilter|null $Filter
 */
class OcsfNumberFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'activity_id'|'compliance.status_id'|'confidence_score'|'severity_id'|'status_id'|'finding_info.related_events_count'|null,
     *     Filter?: NumberFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
