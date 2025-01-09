<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ruleNumber
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
     *     ruleNumber: int,
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
