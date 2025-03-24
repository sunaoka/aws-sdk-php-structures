<?php

namespace Sunaoka\Aws\Structures\Ssm\GetDeployablePatchSnapshotForInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023'|null $OperatingSystem
 * @property PatchFilterGroup|null $GlobalFilters
 * @property PatchRuleGroup|null $ApprovalRules
 * @property list<string>|null $ApprovedPatches
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null $ApprovedPatchesComplianceLevel
 * @property list<string>|null $RejectedPatches
 * @property 'ALLOW_AS_DEPENDENCY'|'BLOCK'|null $RejectedPatchesAction
 * @property bool|null $ApprovedPatchesEnableNonSecurity
 * @property list<PatchSource>|null $Sources
 * @property 'COMPLIANT'|'NON_COMPLIANT'|null $AvailableSecurityUpdatesComplianceStatus
 */
class BaselineOverride extends Shape
{
    /**
     * @param array{
     *     OperatingSystem?: 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023'|null,
     *     GlobalFilters?: PatchFilterGroup|null,
     *     ApprovalRules?: PatchRuleGroup|null,
     *     ApprovedPatches?: list<string>|null,
     *     ApprovedPatchesComplianceLevel?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null,
     *     RejectedPatches?: list<string>|null,
     *     RejectedPatchesAction?: 'ALLOW_AS_DEPENDENCY'|'BLOCK'|null,
     *     ApprovedPatchesEnableNonSecurity?: bool|null,
     *     Sources?: list<PatchSource>|null,
     *     AvailableSecurityUpdatesComplianceStatus?: 'COMPLIANT'|'NON_COMPLIANT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
