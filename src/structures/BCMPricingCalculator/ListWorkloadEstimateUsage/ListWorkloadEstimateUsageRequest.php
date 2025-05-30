<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListWorkloadEstimateUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadEstimateId
 * @property list<Shapes\ListUsageFilter>|null $filters
 * @property string|null $nextToken
 * @property int<0, 300>|null $maxResults
 */
class ListWorkloadEstimateUsageRequest extends Request
{
    /**
     * @param array{
     *     workloadEstimateId: string,
     *     filters?: list<Shapes\ListUsageFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 300>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
