<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdatePatchBaseline;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BaselineId
 * @property string|null $Name
 * @property 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023'|null $OperatingSystem
 * @property Shapes\PatchFilterGroup|null $GlobalFilters
 * @property Shapes\PatchRuleGroup|null $ApprovalRules
 * @property list<string>|null $ApprovedPatches
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED'|null $ApprovedPatchesComplianceLevel
 * @property bool|null $ApprovedPatchesEnableNonSecurity
 * @property list<string>|null $RejectedPatches
 * @property 'ALLOW_AS_DEPENDENCY'|'BLOCK'|null $RejectedPatchesAction
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $ModifiedDate
 * @property string|null $Description
 * @property list<Shapes\PatchSource>|null $Sources
 * @property 'COMPLIANT'|'NON_COMPLIANT'|null $AvailableSecurityUpdatesComplianceStatus
 */
class UpdatePatchBaselineResponse extends Response
{
}
