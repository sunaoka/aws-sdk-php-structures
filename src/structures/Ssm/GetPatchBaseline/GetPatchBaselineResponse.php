<?php

namespace Sunaoka\Aws\Structures\Ssm\GetPatchBaseline;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $BaselineId
 * @property string $Name
 * @property 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023' $OperatingSystem
 * @property Shapes\PatchFilterGroup $GlobalFilters
 * @property Shapes\PatchRuleGroup $ApprovalRules
 * @property list<string> $ApprovedPatches
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFORMATIONAL'|'UNSPECIFIED' $ApprovedPatchesComplianceLevel
 * @property bool $ApprovedPatchesEnableNonSecurity
 * @property list<string> $RejectedPatches
 * @property 'ALLOW_AS_DEPENDENCY'|'BLOCK' $RejectedPatchesAction
 * @property list<string> $PatchGroups
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $ModifiedDate
 * @property string $Description
 * @property list<Shapes\PatchSource> $Sources
 */
class GetPatchBaselineResponse extends Response
{
}
