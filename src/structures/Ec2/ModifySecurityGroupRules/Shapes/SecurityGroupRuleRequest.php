<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifySecurityGroupRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpProtocol
 * @property int|null $FromPort
 * @property int|null $ToPort
 * @property string|null $CidrIpv4
 * @property string|null $CidrIpv6
 * @property string|null $PrefixListId
 * @property string|null $ReferencedGroupId
 * @property string|null $Description
 */
class SecurityGroupRuleRequest extends Shape
{
    /**
     * @param array{
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
