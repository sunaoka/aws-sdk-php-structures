<?php

namespace Sunaoka\Aws\Structures\Neptunedata\DeleteSparqlStatistics;

trait DeleteSparqlStatisticsTrait
{
    /**
     * @return DeleteSparqlStatisticsResponse
     */
    public function deleteSparqlStatistics()
    {
        $result = parent::deleteSparqlStatistics();
        return new DeleteSparqlStatisticsResponse($result->toArray());
    }
}
