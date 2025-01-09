<?php

namespace Sunaoka\Aws\Structures\Rds\PromoteReadReplicaDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'active'|'not-in-use'|'enabled'|'disabled'|'enabling'|'disabling'|'modifying-max-capacity'|'error' $Status
 * @property double $MinRequiredACU
 */
class LimitlessDatabase extends Shape
{
    /**
     * @param array{
     *     Status?: 'active'|'not-in-use'|'enabled'|'disabled'|'enabling'|'disabling'|'modifying-max-capacity'|'error',
     *     MinRequiredACU?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
