<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ManageSparqlStatistics;

trait ManageSparqlStatisticsTrait
{
    /**
     * @param ManageSparqlStatisticsRequest $args
     * @return ManageSparqlStatisticsResponse
     */
    public function manageSparqlStatistics(ManageSparqlStatisticsRequest $args)
    {
        $result = parent::manageSparqlStatistics($args->toArray());
        return new ManageSparqlStatisticsResponse($result->toArray());
    }
}
