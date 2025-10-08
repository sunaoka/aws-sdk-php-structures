<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource;

trait CreateDataSourceTrait
{
    /**
     * @param CreateDataSourceRequest $args
     * @return CreateDataSourceResponse
     */
    public function createDataSource(CreateDataSourceRequest $args)
    {
        $result = parent::createDataSource($args->toArray());
        return new CreateDataSourceResponse($result->toArray());
    }
}
