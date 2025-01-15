<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ListBillEstimatesFilter>|null $filters
 * @property Shapes\FilterTimestamp|null $createdAtFilter
 * @property Shapes\FilterTimestamp|null $expiresAtFilter
 * @property string|null $nextToken
 * @property int<min, 25>|null $maxResults
 */
class ListBillEstimatesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\ListBillEstimatesFilter>|null,
     *     createdAtFilter?: Shapes\FilterTimestamp|null,
     *     expiresAtFilter?: Shapes\FilterTimestamp|null,
     *     nextToken?: string|null,
     *     maxResults?: int<min, 25>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
