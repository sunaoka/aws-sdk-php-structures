<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetSparqlStatistics;

trait GetSparqlStatisticsTrait
{
    /**
     * @return GetSparqlStatisticsResponse
     */
    public function getSparqlStatistics()
    {
        $result = parent::getSparqlStatistics();
        return new GetSparqlStatisticsResponse($result->toArray());
    }
}
