<?php

namespace Sunaoka\Aws\Structures\Ssm\ListComplianceItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ComplianceType
 * @property string|null $ResourceType
 * @property string|null $ResourceId
 * @property string|null $Id
 * @property string|null $Title
 * @property 'COMPLIANT'|'NON_COMPLIANT'|null $Status
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null $Severity
 * @property ComplianceExecutionSummary|null $ExecutionSummary
 * @property array<string, string>|null $Details
 */
class ComplianceItem extends Shape
{
    /**
     * @param array{
     *     ComplianceType?: string|null,
     *     ResourceType?: string|null,
     *     ResourceId?: string|null,
     *     Id?: string|null,
     *     Title?: string|null,
     *     Status?: 'COMPLIANT'|'NON_COMPLIANT'|null,
     *     Severity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null,
     *     ExecutionSummary?: ComplianceExecutionSummary|null,
     *     Details?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
