<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceComplianceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ComplianceType
 * @property string|null $ResourceType
 * @property string|null $ResourceId
 * @property 'COMPLIANT'|'NON_COMPLIANT'|null $Status
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null $OverallSeverity
 * @property ComplianceExecutionSummary|null $ExecutionSummary
 * @property CompliantSummary|null $CompliantSummary
 * @property NonCompliantSummary|null $NonCompliantSummary
 */
class ResourceComplianceSummaryItem extends Shape
{
    /**
     * @param array{
     *     ComplianceType?: string|null,
     *     ResourceType?: string|null,
     *     ResourceId?: string|null,
     *     Status?: 'COMPLIANT'|'NON_COMPLIANT'|null,
     *     OverallSeverity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null,
     *     ExecutionSummary?: ComplianceExecutionSummary|null,
     *     CompliantSummary?: CompliantSummary|null,
     *     NonCompliantSummary?: NonCompliantSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
