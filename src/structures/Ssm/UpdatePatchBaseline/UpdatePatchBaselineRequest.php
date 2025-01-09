<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdatePatchBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BaselineId
 * @property string $Name
 * @property Shapes\PatchFilterGroup $GlobalFilters
 * @property Shapes\PatchRuleGroup $ApprovalRules
 * @property list<string> $ApprovedPatches
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED' $ApprovedPatchesComplianceLevel
 * @property bool $ApprovedPatchesEnableNonSecurity
 * @property list<string> $RejectedPatches
 * @property 'ALLOW_AS_DEPENDENCY'|'BLOCK' $RejectedPatchesAction
 * @property string $Description
 * @property list<Shapes\PatchSource> $Sources
 * @property bool $Replace
 */
class UpdatePatchBaselineRequest extends Request
{
    /**
     * @param array{
     *     BaselineId: string,
     *     Name?: string,
     *     GlobalFilters?: Shapes\PatchFilterGroup,
     *     ApprovalRules?: Shapes\PatchRuleGroup,
     *     ApprovedPatches?: list<string>,
     *     ApprovedPatchesComplianceLevel?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED',
     *     ApprovedPatchesEnableNonSecurity?: bool,
     *     RejectedPatches?: list<string>,
     *     RejectedPatchesAction?: 'ALLOW_AS_DEPENDENCY'|'BLOCK',
     *     Description?: string,
     *     Sources?: list<Shapes\PatchSource>,
     *     Replace?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
