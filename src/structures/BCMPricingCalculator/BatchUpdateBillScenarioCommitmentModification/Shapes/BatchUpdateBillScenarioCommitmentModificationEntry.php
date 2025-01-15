<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioCommitmentModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string|null $group
 */
class BatchUpdateBillScenarioCommitmentModificationEntry extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     group?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
