<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateDataLake;

trait UpdateDataLakeTrait
{
    /**
     * @param UpdateDataLakeRequest $args
     * @return UpdateDataLakeResponse
     */
    public function updateDataLake(UpdateDataLakeRequest $args)
    {
        $result = parent::updateDataLake($args->toArray());
        return new UpdateDataLakeResponse($result->toArray());
    }
}
