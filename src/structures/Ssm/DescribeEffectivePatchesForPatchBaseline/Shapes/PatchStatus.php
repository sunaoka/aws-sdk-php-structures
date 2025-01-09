<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeEffectivePatchesForPatchBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'APPROVED'|'PENDING_APPROVAL'|'EXPLICIT_APPROVED'|'EXPLICIT_REJECTED' $DeploymentStatus
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED' $ComplianceLevel
 * @property \Aws\Api\DateTimeResult $ApprovalDate
 */
class PatchStatus extends Shape
{
    /**
     * @param array{
     *     DeploymentStatus?: 'APPROVED'|'PENDING_APPROVAL'|'EXPLICIT_APPROVED'|'EXPLICIT_REJECTED',
     *     ComplianceLevel?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED',
     *     ApprovalDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
