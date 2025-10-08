<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseMetricData;

trait GetRelationalDatabaseMetricDataTrait
{
    /**
     * @param GetRelationalDatabaseMetricDataRequest $args
     * @return GetRelationalDatabaseMetricDataResponse
     */
    public function getRelationalDatabaseMetricData(GetRelationalDatabaseMetricDataRequest $args)
    {
        $result = parent::getRelationalDatabaseMetricData($args->toArray());
        return new GetRelationalDatabaseMetricDataResponse($result->toArray());
    }
}
