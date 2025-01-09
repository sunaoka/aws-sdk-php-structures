<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacityLimits $capacityLimits
 */
class AccountSettingsDetail extends Shape
{
    /**
     * @param array{capacityLimits?: CapacityLimits} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
