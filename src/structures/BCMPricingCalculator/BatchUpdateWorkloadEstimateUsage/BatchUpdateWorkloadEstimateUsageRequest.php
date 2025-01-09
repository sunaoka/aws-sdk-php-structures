<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchUpdateWorkloadEstimateUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadEstimateId
 * @property list<Shapes\BatchUpdateWorkloadEstimateUsageEntry> $usage
 */
class BatchUpdateWorkloadEstimateUsageRequest extends Request
{
    /**
     * @param array{
     *     workloadEstimateId: string,
     *     usage: list<Shapes\BatchUpdateWorkloadEstimateUsageEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
