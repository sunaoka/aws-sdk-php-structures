<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE_UNDER_DDOS'|'ALWAYS_ON' $ALBLowReputationMode
 */
class OnSourceDDoSProtectionConfig extends Shape
{
    /**
     * @param array{ALBLowReputationMode: 'ACTIVE_UNDER_DDOS'|'ALWAYS_ON'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
