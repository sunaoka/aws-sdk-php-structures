<?php

namespace Sunaoka\Aws\Structures\Ec2\GetEnabledIpamPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $IpamPolicyEnabled
 * @property string|null $IpamPolicyId
 * @property 'account'|'delegated-administrator-for-ipam'|null $ManagedBy
 */
class GetEnabledIpamPolicyResponse extends Response
{
}
