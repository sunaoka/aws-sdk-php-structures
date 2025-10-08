<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromRDS;

trait CreateDataSourceFromRDSTrait
{
    /**
     * @param CreateDataSourceFromRDSRequest $args
     * @return CreateDataSourceFromRDSResponse
     */
    public function createDataSourceFromRDS(CreateDataSourceFromRDSRequest $args)
    {
        $result = parent::createDataSourceFromRDS($args->toArray());
        return new CreateDataSourceFromRDSResponse($result->toArray());
    }
}
