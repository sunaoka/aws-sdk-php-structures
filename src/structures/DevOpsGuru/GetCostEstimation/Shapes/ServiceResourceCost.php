<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetCostEstimation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property 'ACTIVE'|'INACTIVE'|null $State
 * @property int|null $Count
 * @property double|null $UnitCost
 * @property double|null $Cost
 */
class ServiceResourceCost extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     State?: 'ACTIVE'|'INACTIVE'|null,
     *     Count?: int|null,
     *     UnitCost?: double|null,
     *     Cost?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
