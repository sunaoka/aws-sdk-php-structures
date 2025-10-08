<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource;

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
