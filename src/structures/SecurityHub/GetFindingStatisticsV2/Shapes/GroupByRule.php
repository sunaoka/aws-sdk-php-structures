<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OcsfFindingFilters|null $Filters
 * @property 'activity_name'|'cloud.account.uid'|'cloud.provider'|'cloud.region'|'compliance.assessments.name'|'compliance.status'|'compliance.control'|'finding_info.title'|'finding_info.related_events.traits.category'|'finding_info.types'|'metadata.product.name'|'metadata.product.uid'|'resources.type'|'resources.uid'|'severity'|'status'|'vulnerabilities.fix_coverage'|'class_name'|'vulnerabilities.affected_packages.name'|'finding_info.analytic.name'|'compliance.standards'|'cloud.account.name'|'vendor_attributes.severity'|'metadata.product.vendor_name' $GroupByField
 */
class GroupByRule extends Shape
{
    /**
     * @param array{
     *     Filters?: OcsfFindingFilters|null,
     *     GroupByField: 'activity_name'|'cloud.account.uid'|'cloud.provider'|'cloud.region'|'compliance.assessments.name'|'compliance.status'|'compliance.control'|'finding_info.title'|'finding_info.related_events.traits.category'|'finding_info.types'|'metadata.product.name'|'metadata.product.uid'|'resources.type'|'resources.uid'|'severity'|'status'|'vulnerabilities.fix_coverage'|'class_name'|'vulnerabilities.affected_packages.name'|'finding_info.analytic.name'|'compliance.standards'|'cloud.account.name'|'vendor_attributes.severity'|'metadata.product.vendor_name'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
