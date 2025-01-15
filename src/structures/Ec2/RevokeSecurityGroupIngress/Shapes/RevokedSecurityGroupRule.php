<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeSecurityGroupIngress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecurityGroupRuleId
 * @property string|null $GroupId
 * @property bool|null $IsEgress
 * @property string|null $IpProtocol
 * @property int|null $FromPort
 * @property int|null $ToPort
 * @property string|null $CidrIpv4
 * @property string|null $CidrIpv6
 * @property string|null $PrefixListId
 * @property string|null $ReferencedGroupId
 * @property string|null $Description
 */
class RevokedSecurityGroupRule extends Shape
{
    /**
     * @param array{
     *     SecurityGroupRuleId?: string|null,
     *     GroupId?: string|null,
     *     IsEgress?: bool|null,
     *     IpProtocol?: string|null,
     *     FromPort?: int|null,
     *     ToPort?: int|null,
     *     CidrIpv4?: string|null,
     *     CidrIpv6?: string|null,
     *     PrefixListId?: string|null,
     *     ReferencedGroupId?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
