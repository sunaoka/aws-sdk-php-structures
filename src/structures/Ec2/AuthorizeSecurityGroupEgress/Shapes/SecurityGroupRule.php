<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeSecurityGroupEgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecurityGroupRuleId
 * @property string $GroupId
 * @property string $GroupOwnerId
 * @property bool $IsEgress
 * @property string $IpProtocol
 * @property int $FromPort
 * @property int $ToPort
 * @property string $CidrIpv4
 * @property string $CidrIpv6
 * @property string $PrefixListId
 * @property ReferencedSecurityGroup $ReferencedGroupInfo
 * @property string $Description
 * @property list<Tag> $Tags
 * @property string $SecurityGroupRuleArn
 */
class SecurityGroupRule extends Shape
{
    /**
     * @param array{
     *     SecurityGroupRuleId?: string,
     *     GroupId?: string,
     *     GroupOwnerId?: string,
     *     IsEgress?: bool,
     *     IpProtocol?: string,
     *     FromPort?: int,
     *     ToPort?: int,
     *     CidrIpv4?: string,
     *     CidrIpv6?: string,
     *     PrefixListId?: string,
     *     ReferencedGroupInfo?: ReferencedSecurityGroup,
     *     Description?: string,
     *     Tags?: list<Tag>,
     *     SecurityGroupRuleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
