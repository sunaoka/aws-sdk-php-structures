<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlanRates;

trait DescribeSavingsPlanRatesTrait
{
    /**
     * @param DescribeSavingsPlanRatesRequest $args
     * @return DescribeSavingsPlanRatesResponse
     */
    public function describeSavingsPlanRates(DescribeSavingsPlanRatesRequest $args)
    {
        $result = parent::describeSavingsPlanRates($args->toArray());
        return new DescribeSavingsPlanRatesResponse($result->toArray());
    }
}
