<?php

namespace Sunaoka\Aws\Structures\Ssm\CreatePatchBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023'|null $OperatingSystem
 * @property string $Name
 * @property Shapes\PatchFilterGroup|null $GlobalFilters
 * @property Shapes\PatchRuleGroup|null $ApprovalRules
 * @property list<string>|null $ApprovedPatches
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null $ApprovedPatchesComplianceLevel
 * @property bool|null $ApprovedPatchesEnableNonSecurity
 * @property list<string>|null $RejectedPatches
 * @property 'ALLOW_AS_DEPENDENCY'|'BLOCK'|null $RejectedPatchesAction
 * @property string|null $Description
 * @property list<Shapes\PatchSource>|null $Sources
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreatePatchBaselineRequest extends Request
{
    /**
     * @param array{
     *     OperatingSystem?: 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023'|null,
     *     Name: string,
     *     GlobalFilters?: Shapes\PatchFilterGroup|null,
     *     ApprovalRules?: Shapes\PatchRuleGroup|null,
     *     ApprovedPatches?: list<string>|null,
     *     ApprovedPatchesComplianceLevel?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null,
     *     ApprovedPatchesEnableNonSecurity?: bool|null,
     *     RejectedPatches?: list<string>|null,
     *     RejectedPatchesAction?: 'ALLOW_AS_DEPENDENCY'|'BLOCK'|null,
     *     Description?: string|null,
     *     Sources?: list<Shapes\PatchSource>|null,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
