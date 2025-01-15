<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TotalCommitment
 * @property string|null $UsedCommitment
 * @property string|null $UnusedCommitment
 * @property string|null $UtilizationPercentage
 */
class SavingsPlansUtilization extends Shape
{
    /**
     * @param array{
     *     TotalCommitment?: string|null,
     *     UsedCommitment?: string|null,
     *     UnusedCommitment?: string|null,
     *     UtilizationPercentage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
