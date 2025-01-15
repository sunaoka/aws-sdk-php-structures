<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacityLimits|null $capacityLimits
 */
class AccountSettingsDetail extends Shape
{
    /**
     * @param array{capacityLimits?: CapacityLimits|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
