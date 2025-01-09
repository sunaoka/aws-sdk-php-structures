<?php

namespace Sunaoka\Aws\Structures\Ssm\CreatePatchBaseline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023' $OperatingSystem
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
 * @property string $ClientToken
 * @property list<Shapes\Tag> $Tags
 */
class CreatePatchBaselineRequest extends Request
{
    /**
     * @param array{
     *     OperatingSystem?: 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023',
     *     Name: string,
     *     GlobalFilters?: Shapes\PatchFilterGroup,
     *     ApprovalRules?: Shapes\PatchRuleGroup,
     *     ApprovedPatches?: list<string>,
     *     ApprovedPatchesComplianceLevel?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED',
     *     ApprovedPatchesEnableNonSecurity?: bool,
     *     RejectedPatches?: list<string>,
     *     RejectedPatchesAction?: 'ALLOW_AS_DEPENDENCY'|'BLOCK',
     *     Description?: string,
     *     Sources?: list<Shapes\PatchSource>,
     *     ClientToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
