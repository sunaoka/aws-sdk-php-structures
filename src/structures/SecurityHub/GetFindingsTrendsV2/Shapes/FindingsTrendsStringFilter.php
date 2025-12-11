<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsTrendsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'account_id'|'region'|'finding_types'|'finding_status'|'finding_cve_ids'|'finding_compliance_status'|'finding_control_id'|'finding_class_name'|'finding_provider'|'finding_activity_name'|null $FieldName
 * @property StringFilter|null $Filter
 */
class FindingsTrendsStringFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'account_id'|'region'|'finding_types'|'finding_status'|'finding_cve_ids'|'finding_compliance_status'|'finding_control_id'|'finding_class_name'|'finding_provider'|'finding_activity_name'|null,
     *     Filter?: StringFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
