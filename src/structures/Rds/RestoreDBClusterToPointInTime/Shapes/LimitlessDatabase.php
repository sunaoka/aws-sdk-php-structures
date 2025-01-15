<?php

namespace Sunaoka\Aws\Structures\Rds\RestoreDBClusterToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'active'|'not-in-use'|'enabled'|'disabled'|'enabling'|'disabling'|'modifying-max-capacity'|'error'|null $Status
 * @property double|null $MinRequiredACU
 */
class LimitlessDatabase extends Shape
{
    /**
     * @param array{
     *     Status?: 'active'|'not-in-use'|'enabled'|'disabled'|'enabling'|'disabling'|'modifying-max-capacity'|'error'|null,
     *     MinRequiredACU?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
