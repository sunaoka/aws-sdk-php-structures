<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferingRates;

trait DescribeSavingsPlansOfferingRatesTrait
{
    /**
     * @param DescribeSavingsPlansOfferingRatesRequest $args
     * @return DescribeSavingsPlansOfferingRatesResponse
     */
    public function describeSavingsPlansOfferingRates(DescribeSavingsPlansOfferingRatesRequest $args)
    {
        $result = parent::describeSavingsPlansOfferingRates($args->toArray());
        return new DescribeSavingsPlansOfferingRatesResponse($result->toArray());
    }
}
