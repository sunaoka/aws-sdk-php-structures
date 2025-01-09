<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetCostEstimation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property 'ACTIVE'|'INACTIVE' $State
 * @property int $Count
 * @property double $UnitCost
 * @property double $Cost
 */
class ServiceResourceCost extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     State?: 'ACTIVE'|'INACTIVE',
     *     Count?: int,
     *     UnitCost?: double,
     *     Cost?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
