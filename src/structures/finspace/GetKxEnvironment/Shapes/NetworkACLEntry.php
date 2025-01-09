<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 32766> $ruleNumber
 * @property string $protocol
 * @property 'allow'|'deny' $ruleAction
 * @property PortRange $portRange
 * @property IcmpTypeCode $icmpTypeCode
 * @property string $cidrBlock
 */
class NetworkACLEntry extends Shape
{
    /**
     * @param array{
     *     ruleNumber: int<1, 32766>,
     *     protocol: string,
     *     ruleAction: 'allow'|'deny',
     *     portRange?: PortRange,
     *     icmpTypeCode?: IcmpTypeCode,
     *     cidrBlock: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
