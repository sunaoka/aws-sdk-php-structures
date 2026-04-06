<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchDeleteWorkloadEstimateUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadEstimateId
 * @property list<string> $ids
 */
class BatchDeleteWorkloadEstimateUsageRequest extends Request
{
    /**
     * @param array{
     *     workloadEstimateId: string,
     *     ids: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
