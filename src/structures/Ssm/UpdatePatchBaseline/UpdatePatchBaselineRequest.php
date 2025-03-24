<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdatePatchBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BaselineId
 * @property string|null $Name
 * @property Shapes\PatchFilterGroup|null $GlobalFilters
 * @property Shapes\PatchRuleGroup|null $ApprovalRules
 * @property list<string>|null $ApprovedPatches
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null $ApprovedPatchesComplianceLevel
 * @property bool|null $ApprovedPatchesEnableNonSecurity
 * @property list<string>|null $RejectedPatches
 * @property 'ALLOW_AS_DEPENDENCY'|'BLOCK'|null $RejectedPatchesAction
 * @property string|null $Description
 * @property list<Shapes\PatchSource>|null $Sources
 * @property 'COMPLIANT'|'NON_COMPLIANT'|null $AvailableSecurityUpdatesComplianceStatus
 * @property bool|null $Replace
 */
class UpdatePatchBaselineRequest extends Request
{
    /**
     * @param array{
     *     BaselineId: string,
     *     Name?: string|null,
     *     GlobalFilters?: Shapes\PatchFilterGroup|null,
     *     ApprovalRules?: Shapes\PatchRuleGroup|null,
     *     ApprovedPatches?: list<string>|null,
     *     ApprovedPatchesComplianceLevel?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null,
     *     ApprovedPatchesEnableNonSecurity?: bool|null,
     *     RejectedPatches?: list<string>|null,
     *     RejectedPatchesAction?: 'ALLOW_AS_DEPENDENCY'|'BLOCK'|null,
     *     Description?: string|null,
     *     Sources?: list<Shapes\PatchSource>|null,
     *     AvailableSecurityUpdatesComplianceStatus?: 'COMPLIANT'|'NON_COMPLIANT'|null,
     *     Replace?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
