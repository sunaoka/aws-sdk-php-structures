<?php

namespace Sunaoka\Aws\Structures\Ssm\GetDeployablePatchSnapshotForInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023' $OperatingSystem
 * @property PatchFilterGroup $GlobalFilters
 * @property PatchRuleGroup $ApprovalRules
 * @property list<string> $ApprovedPatches
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED' $ApprovedPatchesComplianceLevel
 * @property list<string> $RejectedPatches
 * @property 'ALLOW_AS_DEPENDENCY'|'BLOCK' $RejectedPatchesAction
 * @property bool $ApprovedPatchesEnableNonSecurity
 * @property list<PatchSource> $Sources
 */
class BaselineOverride extends Shape
{
    /**
     * @param array{
     *     OperatingSystem?: 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023',
     *     GlobalFilters?: PatchFilterGroup,
     *     ApprovalRules?: PatchRuleGroup,
     *     ApprovedPatches?: list<string>,
     *     ApprovedPatchesComplianceLevel?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED',
     *     RejectedPatches?: list<string>,
     *     RejectedPatchesAction?: 'ALLOW_AS_DEPENDENCY'|'BLOCK',
     *     ApprovedPatchesEnableNonSecurity?: bool,
     *     Sources?: list<PatchSource>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
