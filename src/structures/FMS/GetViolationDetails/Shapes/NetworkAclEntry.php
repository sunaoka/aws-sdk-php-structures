<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkAclIcmpTypeCode|null $IcmpTypeCode
 * @property string $Protocol
 * @property NetworkAclPortRange|null $PortRange
 * @property string|null $CidrBlock
 * @property string|null $Ipv6CidrBlock
 * @property 'allow'|'deny' $RuleAction
 * @property bool $Egress
 */
class NetworkAclEntry extends Shape
{
    /**
     * @param array{
     *     IcmpTypeCode?: NetworkAclIcmpTypeCode|null,
     *     Protocol: string,
     *     PortRange?: NetworkAclPortRange|null,
     *     CidrBlock?: string|null,
     *     Ipv6CidrBlock?: string|null,
     *     RuleAction: 'allow'|'deny',
     *     Egress: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
