<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDataSource;

trait DeleteDataSourceTrait
{
    /**
     * @param DeleteDataSourceRequest $args
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSource(DeleteDataSourceRequest $args)
    {
        $result = parent::deleteDataSource($args->toArray());
        return new DeleteDataSourceResponse($result->toArray());
    }
}
