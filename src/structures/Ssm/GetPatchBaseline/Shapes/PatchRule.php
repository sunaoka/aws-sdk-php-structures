<?php

namespace Sunaoka\Aws\Structures\Ssm\GetPatchBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PatchFilterGroup $PatchFilterGroup
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED' $ComplianceLevel
 * @property int $ApproveAfterDays
 * @property string $ApproveUntilDate
 * @property bool $EnableNonSecurity
 */
class PatchRule extends Shape
{
    /**
     * @param array{
     *     PatchFilterGroup: PatchFilterGroup,
     *     ComplianceLevel?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED',
     *     ApproveAfterDays?: int,
     *     ApproveUntilDate?: string,
     *     EnableNonSecurity?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
