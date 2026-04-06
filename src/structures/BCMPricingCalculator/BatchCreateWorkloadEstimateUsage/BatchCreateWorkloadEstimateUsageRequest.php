<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\BatchCreateWorkloadEstimateUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadEstimateId
 * @property list<Shapes\BatchCreateWorkloadEstimateUsageEntry> $usage
 * @property string|null $clientToken
 */
class BatchCreateWorkloadEstimateUsageRequest extends Request
{
    /**
     * @param array{
     *     workloadEstimateId: string,
     *     usage: list<Shapes\BatchCreateWorkloadEstimateUsageEntry>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
