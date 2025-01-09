<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeSecurityGroupEgress;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $Return
 * @property list<Shapes\IpPermission> $UnknownIpPermissions
 * @property list<Shapes\RevokedSecurityGroupRule> $RevokedSecurityGroupRules
 */
class RevokeSecurityGroupEgressResponse extends Response
{
}
