<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateDataLakeDataset;

trait CreateDataLakeDatasetTrait
{
    /**
     * @param CreateDataLakeDatasetRequest $args
     * @return CreateDataLakeDatasetResponse
     */
    public function createDataLakeDataset(CreateDataLakeDatasetRequest $args)
    {
        $result = parent::createDataLakeDataset($args->toArray());
        return new CreateDataLakeDatasetResponse($result->toArray());
    }
}
