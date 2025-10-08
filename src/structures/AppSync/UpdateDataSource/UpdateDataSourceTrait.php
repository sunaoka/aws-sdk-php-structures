<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateDataSource;

trait UpdateDataSourceTrait
{
    /**
     * @param UpdateDataSourceRequest $args
     * @return UpdateDataSourceResponse
     */
    public function updateDataSource(UpdateDataSourceRequest $args)
    {
        $result = parent::updateDataSource($args->toArray());
        return new UpdateDataSourceResponse($result->toArray());
    }
}
