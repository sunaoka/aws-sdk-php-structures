<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageTotals;

trait GetUsageTotalsTrait
{
    /**
     * @param GetUsageTotalsRequest $args
     * @return GetUsageTotalsResponse
     */
    public function getUsageTotals(GetUsageTotalsRequest $args)
    {
        $result = parent::getUsageTotals($args->toArray());
        return new GetUsageTotalsResponse($result->toArray());
    }
}
