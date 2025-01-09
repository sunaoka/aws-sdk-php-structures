<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySecurityGroupRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpProtocol
 * @property int $FromPort
 * @property int $ToPort
 * @property string $CidrIpv4
 * @property string $CidrIpv6
 * @property string $PrefixListId
 * @property string $ReferencedGroupId
 * @property string $Description
 */
class SecurityGroupRuleRequest extends Shape
{
    /**
     * @param array{
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
