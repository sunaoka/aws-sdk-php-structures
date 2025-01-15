<?php

namespace Sunaoka\Aws\Structures\Ssm\GetPatchBaselineForPatchGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $BaselineId
 * @property string|null $PatchGroup
 * @property 'WINDOWS'|'AMAZON_LINUX'|'AMAZON_LINUX_2'|'AMAZON_LINUX_2022'|'UBUNTU'|'REDHAT_ENTERPRISE_LINUX'|'SUSE'|'CENTOS'|'ORACLE_LINUX'|'DEBIAN'|'MACOS'|'RASPBIAN'|'ROCKY_LINUX'|'ALMA_LINUX'|'AMAZON_LINUX_2023'|null $OperatingSystem
 */
class GetPatchBaselineForPatchGroupResponse extends Response
{
}
