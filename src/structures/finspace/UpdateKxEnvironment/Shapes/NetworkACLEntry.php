<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 32766> $ruleNumber
 * @property string $protocol
 * @property 'allow'|'deny' $ruleAction
 * @property PortRange|null $portRange
 * @property IcmpTypeCode|null $icmpTypeCode
 * @property string $cidrBlock
 */
class NetworkACLEntry extends Shape
{
    /**
     * @param array{
     *     ruleNumber: int<1, 32766>,
     *     protocol: string,
     *     ruleAction: 'allow'|'deny',
     *     portRange?: PortRange|null,
     *     icmpTypeCode?: IcmpTypeCode|null,
     *     cidrBlock: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
