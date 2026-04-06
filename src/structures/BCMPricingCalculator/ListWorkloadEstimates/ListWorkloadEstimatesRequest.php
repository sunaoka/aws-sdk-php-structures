<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListWorkloadEstimates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FilterTimestamp|null $createdAtFilter
 * @property Shapes\FilterTimestamp|null $expiresAtFilter
 * @property list<Shapes\ListWorkloadEstimatesFilter>|null $filters
 * @property string|null $nextToken
 * @property int<1, 25>|null $maxResults
 */
class ListWorkloadEstimatesRequest extends Request
{
    /**
     * @param array{
     *     createdAtFilter?: Shapes\FilterTimestamp|null,
     *     expiresAtFilter?: Shapes\FilterTimestamp|null,
     *     filters?: list<Shapes\ListWorkloadEstimatesFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 25>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
