<?php

namespace Sunaoka\Aws\Structures\Ssm\ListComplianceItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComplianceType
 * @property string $ResourceType
 * @property string $ResourceId
 * @property string $Id
 * @property string $Title
 * @property 'COMPLIANT'|'NON_COMPLIANT' $Status
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED' $Severity
 * @property ComplianceExecutionSummary $ExecutionSummary
 * @property array<string, string> $Details
 */
class ComplianceItem extends Shape
{
    /**
     * @param array{
     *     ComplianceType?: string,
     *     ResourceType?: string,
     *     ResourceId?: string,
     *     Id?: string,
     *     Title?: string,
     *     Status?: 'COMPLIANT'|'NON_COMPLIANT',
     *     Severity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED',
     *     ExecutionSummary?: ComplianceExecutionSummary,
     *     Details?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
