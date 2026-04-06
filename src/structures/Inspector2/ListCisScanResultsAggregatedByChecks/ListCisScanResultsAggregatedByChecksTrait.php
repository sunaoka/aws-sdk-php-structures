<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByChecks;

trait ListCisScanResultsAggregatedByChecksTrait
{
    /**
     * @param ListCisScanResultsAggregatedByChecksRequest $args
     * @return ListCisScanResultsAggregatedByChecksResponse
     */
    public function listCisScanResultsAggregatedByChecks(ListCisScanResultsAggregatedByChecksRequest $args)
    {
        $result = parent::listCisScanResultsAggregatedByChecks($args->toArray());
        return new ListCisScanResultsAggregatedByChecksResponse($result->toArray());
    }
}
