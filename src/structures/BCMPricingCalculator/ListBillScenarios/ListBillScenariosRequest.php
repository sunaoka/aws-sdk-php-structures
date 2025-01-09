<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarios;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ListBillScenariosFilter> $filters
 * @property Shapes\FilterTimestamp $createdAtFilter
 * @property Shapes\FilterTimestamp $expiresAtFilter
 * @property string $nextToken
 * @property int $maxResults
 */
class ListBillScenariosRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\ListBillScenariosFilter>,
     *     createdAtFilter?: Shapes\FilterTimestamp,
     *     expiresAtFilter?: Shapes\FilterTimestamp,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
