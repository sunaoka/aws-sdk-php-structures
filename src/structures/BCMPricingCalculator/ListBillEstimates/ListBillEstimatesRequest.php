<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ListBillEstimatesFilter> $filters
 * @property Shapes\FilterTimestamp $createdAtFilter
 * @property Shapes\FilterTimestamp $expiresAtFilter
 * @property string $nextToken
 * @property int<min, 25> $maxResults
 */
class ListBillEstimatesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\ListBillEstimatesFilter>,
     *     createdAtFilter?: Shapes\FilterTimestamp,
     *     expiresAtFilter?: Shapes\FilterTimestamp,
     *     nextToken?: string,
     *     maxResults?: int<min, 25>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
