<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilizationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TotalCommitment
 * @property string $UsedCommitment
 * @property string $UnusedCommitment
 * @property string $UtilizationPercentage
 */
class SavingsPlansUtilization extends Shape
{
    /**
     * @param array{
     *     TotalCommitment?: string,
     *     UsedCommitment?: string,
     *     UnusedCommitment?: string,
     *     UtilizationPercentage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
