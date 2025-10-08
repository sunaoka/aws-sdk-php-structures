<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSource;

trait GetDataSourceTrait
{
    /**
     * @param GetDataSourceRequest $args
     * @return GetDataSourceResponse
     */
    public function getDataSource(GetDataSourceRequest $args)
    {
        $result = parent::getDataSource($args->toArray());
        return new GetDataSourceResponse($result->toArray());
    }
}
