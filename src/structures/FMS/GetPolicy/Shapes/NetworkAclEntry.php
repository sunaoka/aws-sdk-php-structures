<?php

namespace Sunaoka\Aws\Structures\FMS\GetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkAclIcmpTypeCode $IcmpTypeCode
 * @property string $Protocol
 * @property NetworkAclPortRange $PortRange
 * @property string $CidrBlock
 * @property string $Ipv6CidrBlock
 * @property 'allow'|'deny' $RuleAction
 * @property bool $Egress
 */
class NetworkAclEntry extends Shape
{
    /**
     * @param array{
     *     IcmpTypeCode?: NetworkAclIcmpTypeCode,
     *     Protocol: string,
     *     PortRange?: NetworkAclPortRange,
     *     CidrBlock?: string,
     *     Ipv6CidrBlock?: string,
     *     RuleAction: 'allow'|'deny',
     *     Egress: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
