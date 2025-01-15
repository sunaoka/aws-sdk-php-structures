<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeSecurityGroupIngress;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $Return
 * @property list<Shapes\IpPermission>|null $UnknownIpPermissions
 * @property list<Shapes\RevokedSecurityGroupRule>|null $RevokedSecurityGroupRules
 */
class RevokeSecurityGroupIngressResponse extends Response
{
}
