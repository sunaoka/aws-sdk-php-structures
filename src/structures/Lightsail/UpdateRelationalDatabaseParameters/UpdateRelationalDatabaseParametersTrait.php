<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateRelationalDatabaseParameters;

trait UpdateRelationalDatabaseParametersTrait
{
    /**
     * @param UpdateRelationalDatabaseParametersRequest $args
     * @return UpdateRelationalDatabaseParametersResponse
     */
    public function updateRelationalDatabaseParameters(UpdateRelationalDatabaseParametersRequest $args)
    {
        $result = parent::updateRelationalDatabaseParameters($args->toArray());
        return new UpdateRelationalDatabaseParametersResponse($result->toArray());
    }
}
