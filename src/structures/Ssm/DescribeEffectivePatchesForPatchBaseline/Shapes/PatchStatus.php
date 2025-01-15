<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeEffectivePatchesForPatchBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'APPROVED'|'PENDING_APPROVAL'|'EXPLICIT_APPROVED'|'EXPLICIT_REJECTED'|null $DeploymentStatus
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null $ComplianceLevel
 * @property \Aws\Api\DateTimeResult|null $ApprovalDate
 */
class PatchStatus extends Shape
{
    /**
     * @param array{
     *     DeploymentStatus?: 'APPROVED'|'PENDING_APPROVAL'|'EXPLICIT_APPROVED'|'EXPLICIT_REJECTED'|null,
     *     ComplianceLevel?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null,
     *     ApprovalDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
