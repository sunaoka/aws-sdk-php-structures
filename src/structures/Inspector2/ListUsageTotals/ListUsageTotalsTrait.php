<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListUsageTotals;

trait ListUsageTotalsTrait
{
    /**
     * @param ListUsageTotalsRequest $args
     * @return ListUsageTotalsResponse
     */
    public function listUsageTotals(ListUsageTotalsRequest $args)
    {
        $result = parent::listUsageTotals($args->toArray());
        return new ListUsageTotalsResponse($result->toArray());
    }
}
