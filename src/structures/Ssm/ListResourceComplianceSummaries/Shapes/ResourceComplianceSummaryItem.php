<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceComplianceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComplianceType
 * @property string $ResourceType
 * @property string $ResourceId
 * @property 'COMPLIANT'|'NON_COMPLIANT' $Status
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED' $OverallSeverity
 * @property ComplianceExecutionSummary $ExecutionSummary
 * @property CompliantSummary $CompliantSummary
 * @property NonCompliantSummary $NonCompliantSummary
 */
class ResourceComplianceSummaryItem extends Shape
{
    /**
     * @param array{
     *     ComplianceType?: string,
     *     ResourceType?: string,
     *     ResourceId?: string,
     *     Status?: 'COMPLIANT'|'NON_COMPLIANT',
     *     OverallSeverity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED',
     *     ExecutionSummary?: ComplianceExecutionSummary,
     *     CompliantSummary?: CompliantSummary,
     *     NonCompliantSummary?: NonCompliantSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
