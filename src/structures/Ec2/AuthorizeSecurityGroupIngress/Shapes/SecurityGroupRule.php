<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeSecurityGroupIngress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecurityGroupRuleId
 * @property string|null $GroupId
 * @property string|null $GroupOwnerId
 * @property bool|null $IsEgress
 * @property string|null $IpProtocol
 * @property int|null $FromPort
 * @property int|null $ToPort
 * @property string|null $CidrIpv4
 * @property string|null $CidrIpv6
 * @property string|null $PrefixListId
 * @property ReferencedSecurityGroup|null $ReferencedGroupInfo
 * @property string|null $Description
 * @property list<Tag>|null $Tags
 * @property string|null $SecurityGroupRuleArn
 */
class SecurityGroupRule extends Shape
{
    /**
     * @param array{
     *     SecurityGroupRuleId?: string|null,
     *     GroupId?: string|null,
     *     GroupOwnerId?: string|null,
     *     IsEgress?: bool|null,
     *     IpProtocol?: string|null,
     *     FromPort?: int|null,
     *     ToPort?: int|null,
     *     CidrIpv4?: string|null,
     *     CidrIpv6?: string|null,
     *     PrefixListId?: string|null,
     *     ReferencedGroupInfo?: ReferencedSecurityGroup|null,
     *     Description?: string|null,
     *     Tags?: list<Tag>|null,
     *     SecurityGroupRuleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
