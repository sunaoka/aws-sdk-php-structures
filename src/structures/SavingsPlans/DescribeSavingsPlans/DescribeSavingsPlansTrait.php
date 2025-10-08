<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlans;

trait DescribeSavingsPlansTrait
{
    /**
     * @param DescribeSavingsPlansRequest $args
     * @return DescribeSavingsPlansResponse
     */
    public function describeSavingsPlans(DescribeSavingsPlansRequest $args)
    {
        $result = parent::describeSavingsPlans($args->toArray());
        return new DescribeSavingsPlansResponse($result->toArray());
    }
}
