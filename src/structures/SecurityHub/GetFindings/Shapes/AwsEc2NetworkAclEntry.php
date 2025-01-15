<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CidrBlock
 * @property bool|null $Egress
 * @property IcmpTypeCode|null $IcmpTypeCode
 * @property string|null $Ipv6CidrBlock
 * @property PortRangeFromTo|null $PortRange
 * @property string|null $Protocol
 * @property string|null $RuleAction
 * @property int|null $RuleNumber
 */
class AwsEc2NetworkAclEntry extends Shape
{
    /**
     * @param array{
     *     CidrBlock?: string|null,
     *     Egress?: bool|null,
     *     IcmpTypeCode?: IcmpTypeCode|null,
     *     Ipv6CidrBlock?: string|null,
     *     PortRange?: PortRangeFromTo|null,
     *     Protocol?: string|null,
     *     RuleAction?: string|null,
     *     RuleNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
