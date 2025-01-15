<?php

namespace Sunaoka\Aws\Structures\Ssm\GetDeployablePatchSnapshotForInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PatchFilterGroup $PatchFilterGroup
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null $ComplianceLevel
 * @property int<0, 360>|null $ApproveAfterDays
 * @property string|null $ApproveUntilDate
 * @property bool|null $EnableNonSecurity
 */
class PatchRule extends Shape
{
    /**
     * @param array{
     *     PatchFilterGroup: PatchFilterGroup,
     *     ComplianceLevel?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null,
     *     ApproveAfterDays?: int<0, 360>|null,
     *     ApproveUntilDate?: string|null,
     *     EnableNonSecurity?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
