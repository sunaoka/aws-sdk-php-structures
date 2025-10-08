<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromRedshift;

trait CreateDataSourceFromRedshiftTrait
{
    /**
     * @param CreateDataSourceFromRedshiftRequest $args
     * @return CreateDataSourceFromRedshiftResponse
     */
    public function createDataSourceFromRedshift(CreateDataSourceFromRedshiftRequest $args)
    {
        $result = parent::createDataSourceFromRedshift($args->toArray());
        return new CreateDataSourceFromRedshiftResponse($result->toArray());
    }
}
