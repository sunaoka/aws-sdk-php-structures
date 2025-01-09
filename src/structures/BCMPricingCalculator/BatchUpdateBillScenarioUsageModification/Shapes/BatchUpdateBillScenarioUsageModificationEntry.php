<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioUsageModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $group
 * @property list<UsageAmount> $amounts
 */
class BatchUpdateBillScenarioUsageModificationEntry extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     group?: string,
     *     amounts?: list<UsageAmount>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
