<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioUsageModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string|null $group
 * @property list<UsageAmount>|null $amounts
 */
class BatchUpdateBillScenarioUsageModificationEntry extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     group?: string|null,
     *     amounts?: list<UsageAmount>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
