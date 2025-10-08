<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlansOfferings;

trait DescribeSavingsPlansOfferingsTrait
{
    /**
     * @param DescribeSavingsPlansOfferingsRequest $args
     * @return DescribeSavingsPlansOfferingsResponse
     */
    public function describeSavingsPlansOfferings(DescribeSavingsPlansOfferingsRequest $args)
    {
        $result = parent::describeSavingsPlansOfferings($args->toArray());
        return new DescribeSavingsPlansOfferingsResponse($result->toArray());
    }
}
