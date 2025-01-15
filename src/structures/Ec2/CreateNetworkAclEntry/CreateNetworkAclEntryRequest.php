<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkAclEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $NetworkAclId
 * @property int $RuleNumber
 * @property string $Protocol
 * @property 'allow'|'deny' $RuleAction
 * @property bool $Egress
 * @property string|null $CidrBlock
 * @property string|null $Ipv6CidrBlock
 * @property Shapes\IcmpTypeCode|null $IcmpTypeCode
 * @property Shapes\PortRange|null $PortRange
 */
class CreateNetworkAclEntryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     NetworkAclId: string,
     *     RuleNumber: int,
     *     Protocol: string,
     *     RuleAction: 'allow'|'deny',
     *     Egress: bool,
     *     CidrBlock?: string|null,
     *     Ipv6CidrBlock?: string|null,
     *     IcmpTypeCode?: Shapes\IcmpTypeCode|null,
     *     PortRange?: Shapes\PortRange|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
