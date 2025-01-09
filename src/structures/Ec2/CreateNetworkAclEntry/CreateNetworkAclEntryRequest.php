<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkAclEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $NetworkAclId
 * @property int $RuleNumber
 * @property string $Protocol
 * @property 'allow'|'deny' $RuleAction
 * @property bool $Egress
 * @property string $CidrBlock
 * @property string $Ipv6CidrBlock
 * @property Shapes\IcmpTypeCode $IcmpTypeCode
 * @property Shapes\PortRange $PortRange
 */
class CreateNetworkAclEntryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     NetworkAclId: string,
     *     RuleNumber: int,
     *     Protocol: string,
     *     RuleAction: 'allow'|'deny',
     *     Egress: bool,
     *     CidrBlock?: string,
     *     Ipv6CidrBlock?: string,
     *     IcmpTypeCode?: Shapes\IcmpTypeCode,
     *     PortRange?: Shapes\PortRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
