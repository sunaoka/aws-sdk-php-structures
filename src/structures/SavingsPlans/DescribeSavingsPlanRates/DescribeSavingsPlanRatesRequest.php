<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlanRates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $savingsPlanId
 * @property list<Shapes\SavingsPlanRateFilter>|null $filters
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class DescribeSavingsPlanRatesRequest extends Request
{
    /**
     * @param array{
     *     savingsPlanId: string,
     *     filters?: list<Shapes\SavingsPlanRateFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
