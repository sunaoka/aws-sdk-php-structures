<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListWorkloadEstimates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FilterTimestamp $createdAtFilter
 * @property Shapes\FilterTimestamp $expiresAtFilter
 * @property list<Shapes\ListWorkloadEstimatesFilter> $filters
 * @property string $nextToken
 * @property int<min, 25> $maxResults
 */
class ListWorkloadEstimatesRequest extends Request
{
    /**
     * @param array{
     *     createdAtFilter?: Shapes\FilterTimestamp,
     *     expiresAtFilter?: Shapes\FilterTimestamp,
     *     filters?: list<Shapes\ListWorkloadEstimatesFilter>,
     *     nextToken?: string,
     *     maxResults?: int<min, 25>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
