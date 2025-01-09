<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CidrBlock
 * @property bool $Egress
 * @property IcmpTypeCode $IcmpTypeCode
 * @property string $Ipv6CidrBlock
 * @property PortRangeFromTo $PortRange
 * @property string $Protocol
 * @property string $RuleAction
 * @property int $RuleNumber
 */
class AwsEc2NetworkAclEntry extends Shape
{
    /**
     * @param array{
     *     CidrBlock?: string,
     *     Egress?: bool,
     *     IcmpTypeCode?: IcmpTypeCode,
     *     Ipv6CidrBlock?: string,
     *     PortRange?: PortRangeFromTo,
     *     Protocol?: string,
     *     RuleAction?: string,
     *     RuleNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
