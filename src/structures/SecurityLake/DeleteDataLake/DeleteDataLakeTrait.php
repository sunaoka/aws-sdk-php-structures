<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteDataLake;

trait DeleteDataLakeTrait
{
    /**
     * @param DeleteDataLakeRequest $args
     * @return DeleteDataLakeResponse
     */
    public function deleteDataLake(DeleteDataLakeRequest $args)
    {
        $result = parent::deleteDataLake($args->toArray());
        return new DeleteDataLakeResponse($result->toArray());
    }
}
