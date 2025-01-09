<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateBillScenarioCommitmentModification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $group
 */
class BatchUpdateBillScenarioCommitmentModificationEntry extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     group?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
