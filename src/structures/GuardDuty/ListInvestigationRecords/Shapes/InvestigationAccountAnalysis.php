<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Trend|null $Trend
 * @property Baseline|null $Baseline
 */
class InvestigationAccountAnalysis extends Shape
{
    /**
     * @param array{
     *     Trend?: Trend|null,
     *     Baseline?: Baseline|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
