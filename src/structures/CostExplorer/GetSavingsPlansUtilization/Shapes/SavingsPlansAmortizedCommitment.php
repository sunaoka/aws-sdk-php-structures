<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AmortizedRecurringCommitment
 * @property string|null $AmortizedUpfrontCommitment
 * @property string|null $TotalAmortizedCommitment
 */
class SavingsPlansAmortizedCommitment extends Shape
{
    /**
     * @param array{
     *     AmortizedRecurringCommitment?: string|null,
     *     AmortizedUpfrontCommitment?: string|null,
     *     TotalAmortizedCommitment?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
