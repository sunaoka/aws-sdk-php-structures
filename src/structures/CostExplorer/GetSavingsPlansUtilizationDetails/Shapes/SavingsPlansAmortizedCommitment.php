<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AmortizedRecurringCommitment
 * @property string $AmortizedUpfrontCommitment
 * @property string $TotalAmortizedCommitment
 */
class SavingsPlansAmortizedCommitment extends Shape
{
    /**
     * @param array{
     *     AmortizedRecurringCommitment?: string,
     *     AmortizedUpfrontCommitment?: string,
     *     TotalAmortizedCommitment?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
