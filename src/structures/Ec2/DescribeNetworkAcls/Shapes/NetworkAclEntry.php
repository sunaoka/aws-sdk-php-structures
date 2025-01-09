<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkAcls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CidrBlock
 * @property bool $Egress
 * @property IcmpTypeCode $IcmpTypeCode
 * @property string $Ipv6CidrBlock
 * @property PortRange $PortRange
 * @property string $Protocol
 * @property 'allow'|'deny' $RuleAction
 * @property int $RuleNumber
 */
class NetworkAclEntry extends Shape
{
    /**
     * @param array{
     *     CidrBlock?: string,
     *     Egress?: bool,
     *     IcmpTypeCode?: IcmpTypeCode,
     *     Ipv6CidrBlock?: string,
     *     PortRange?: PortRange,
     *     Protocol?: string,
     *     RuleAction?: 'allow'|'deny',
     *     RuleNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
