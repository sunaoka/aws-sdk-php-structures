<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseParameters;

trait GetRelationalDatabaseParametersTrait
{
    /**
     * @param GetRelationalDatabaseParametersRequest $args
     * @return GetRelationalDatabaseParametersResponse
     */
    public function getRelationalDatabaseParameters(GetRelationalDatabaseParametersRequest $args)
    {
        $result = parent::getRelationalDatabaseParameters($args->toArray());
        return new GetRelationalDatabaseParametersResponse($result->toArray());
    }
}
