<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkAcl\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CidrBlock
 * @property bool|null $Egress
 * @property IcmpTypeCode|null $IcmpTypeCode
 * @property string|null $Ipv6CidrBlock
 * @property PortRange|null $PortRange
 * @property string|null $Protocol
 * @property 'allow'|'deny'|null $RuleAction
 * @property int|null $RuleNumber
 */
class NetworkAclEntry extends Shape
{
    /**
     * @param array{
     *     CidrBlock?: string|null,
     *     Egress?: bool|null,
     *     IcmpTypeCode?: IcmpTypeCode|null,
     *     Ipv6CidrBlock?: string|null,
     *     PortRange?: PortRange|null,
     *     Protocol?: string|null,
     *     RuleAction?: 'allow'|'deny'|null,
     *     RuleNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
