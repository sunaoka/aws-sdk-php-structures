<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListWorkloadEstimateUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadEstimateId
 * @property list<Shapes\ListUsageFilter> $filters
 * @property string $nextToken
 * @property int<min, 25> $maxResults
 */
class ListWorkloadEstimateUsageRequest extends Request
{
    /**
     * @param array{
     *     workloadEstimateId: string,
     *     filters?: list<Shapes\ListUsageFilter>,
     *     nextToken?: string,
     *     maxResults?: int<min, 25>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
