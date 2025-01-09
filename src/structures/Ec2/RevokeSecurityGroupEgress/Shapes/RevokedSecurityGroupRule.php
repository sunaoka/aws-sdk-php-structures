<?php

namespace Sunaoka\Aws\Structures\Ec2\RevokeSecurityGroupEgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecurityGroupRuleId
 * @property string $GroupId
 * @property bool $IsEgress
 * @property string $IpProtocol
 * @property int $FromPort
 * @property int $ToPort
 * @property string $CidrIpv4
 * @property string $CidrIpv6
 * @property string $PrefixListId
 * @property string $ReferencedGroupId
 * @property string $Description
 */
class RevokedSecurityGroupRule extends Shape
{
    /**
     * @param array{
     *     SecurityGroupRuleId?: string,
     *     GroupId?: string,
     *     IsEgress?: bool,
     *     IpProtocol?: string,
     *     FromPort?: int,
     *     ToPort?: int,
     *     CidrIpv4?: string,
     *     CidrIpv6?: string,
     *     PrefixListId?: string,
     *     ReferencedGroupId?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
