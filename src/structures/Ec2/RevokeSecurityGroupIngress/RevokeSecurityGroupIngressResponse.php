<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeSecurityGroupIngress;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $Return
 * @property list<Shapes\IpPermission> $UnknownIpPermissions
 * @property list<Shapes\RevokedSecurityGroupRule> $RevokedSecurityGroupRules
 */
class RevokeSecurityGroupIngressResponse extends Response
{
}
