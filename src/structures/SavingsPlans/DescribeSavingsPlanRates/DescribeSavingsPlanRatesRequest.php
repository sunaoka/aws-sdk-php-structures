<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlanRates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $savingsPlanId
 * @property list<Shapes\SavingsPlanRateFilter> $filters
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class DescribeSavingsPlanRatesRequest extends Request
{
    /**
     * @param array{
     *     savingsPlanId: string,
     *     filters?: list<Shapes\SavingsPlanRateFilter>,
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
