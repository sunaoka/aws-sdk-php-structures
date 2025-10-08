<?php

namespace Sunaoka\Aws\Structures\Neptunedata\DeletePropertygraphStatistics;

trait DeletePropertygraphStatisticsTrait
{
    /**
     * @return DeletePropertygraphStatisticsResponse
     */
    public function deletePropertygraphStatistics()
    {
        $result = parent::deletePropertygraphStatistics();
        return new DeletePropertygraphStatisticsResponse($result->toArray());
    }
}
