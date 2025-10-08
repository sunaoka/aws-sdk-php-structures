<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'findings_summary.total_findings'|'findings_summary.severities.other'|'findings_summary.severities.fatal'|'findings_summary.severities.critical'|'findings_summary.severities.high'|'findings_summary.severities.medium'|'findings_summary.severities.low'|'findings_summary.severities.informational'|'findings_summary.severities.unknown'|null $FieldName
 * @property NumberFilter|null $Filter
 */
class ResourcesNumberFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'findings_summary.total_findings'|'findings_summary.severities.other'|'findings_summary.severities.fatal'|'findings_summary.severities.critical'|'findings_summary.severities.high'|'findings_summary.severities.medium'|'findings_summary.severities.low'|'findings_summary.severities.informational'|'findings_summary.severities.unknown'|null,
     *     Filter?: NumberFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
