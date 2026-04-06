<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkAclEntry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CidrBlock
 * @property bool|null $DryRun
 * @property bool $Egress
 * @property Shapes\IcmpTypeCode|null $IcmpTypeCode
 * @property string|null $Ipv6CidrBlock
 * @property string $NetworkAclId
 * @property Shapes\PortRange|null $PortRange
 * @property string $Protocol
 * @property 'allow'|'deny' $RuleAction
 * @property int $RuleNumber
 */
class CreateNetworkAclEntryRequest extends Request
{
    /**
     * @param array{
     *     CidrBlock?: string|null,
     *     DryRun?: bool|null,
     *     Egress: bool,
     *     IcmpTypeCode?: Shapes\IcmpTypeCode|null,
     *     Ipv6CidrBlock?: string|null,
     *     NetworkAclId: string,
     *     PortRange?: Shapes\PortRange|null,
     *     Protocol: string,
     *     RuleAction: 'allow'|'deny',
     *     RuleNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
