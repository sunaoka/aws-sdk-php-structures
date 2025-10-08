<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'metadata.uid'|'activity_name'|'cloud.account.uid'|'cloud.provider'|'cloud.region'|'compliance.assessments.category'|'compliance.assessments.name'|'compliance.control'|'compliance.status'|'compliance.standards'|'finding_info.desc'|'finding_info.src_url'|'finding_info.title'|'finding_info.types'|'finding_info.uid'|'finding_info.related_events.uid'|'finding_info.related_events.product.uid'|'finding_info.related_events.title'|'metadata.product.name'|'metadata.product.uid'|'metadata.product.vendor_name'|'remediation.desc'|'remediation.references'|'resources.cloud_partition'|'resources.region'|'resources.type'|'resources.uid'|'severity'|'status'|'comment'|'vulnerabilities.fix_coverage'|'class_name'|null $FieldName
 * @property StringFilter|null $Filter
 */
class OcsfStringFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'metadata.uid'|'activity_name'|'cloud.account.uid'|'cloud.provider'|'cloud.region'|'compliance.assessments.category'|'compliance.assessments.name'|'compliance.control'|'compliance.status'|'compliance.standards'|'finding_info.desc'|'finding_info.src_url'|'finding_info.title'|'finding_info.types'|'finding_info.uid'|'finding_info.related_events.uid'|'finding_info.related_events.product.uid'|'finding_info.related_events.title'|'metadata.product.name'|'metadata.product.uid'|'metadata.product.vendor_name'|'remediation.desc'|'remediation.references'|'resources.cloud_partition'|'resources.region'|'resources.type'|'resources.uid'|'severity'|'status'|'comment'|'vulnerabilities.fix_coverage'|'class_name'|null,
     *     Filter?: StringFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
