<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeAccountLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PHONE_NUMBERS'|'POOLS'|'CONFIGURATION_SETS'|'OPT_OUT_LISTS' $Name
 * @property int $Used
 * @property int $Max
 */
class AccountLimit extends Shape
{
    /**
     * @param array{
     *     Name: 'PHONE_NUMBERS'|'POOLS'|'CONFIGURATION_SETS'|'OPT_OUT_LISTS',
     *     Used: int,
     *     Max: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
