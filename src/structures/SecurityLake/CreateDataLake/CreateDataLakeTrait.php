<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateDataLake;

trait CreateDataLakeTrait
{
    /**
     * @param CreateDataLakeRequest $args
     * @return CreateDataLakeResponse
     */
    public function createDataLake(CreateDataLakeRequest $args)
    {
        $result = parent::createDataLake($args->toArray());
        return new CreateDataLakeResponse($result->toArray());
    }
}
