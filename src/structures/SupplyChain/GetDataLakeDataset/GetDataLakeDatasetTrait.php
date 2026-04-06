<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataLakeDataset;

trait GetDataLakeDatasetTrait
{
    /**
     * @param GetDataLakeDatasetRequest $args
     * @return GetDataLakeDatasetResponse
     */
    public function getDataLakeDataset(GetDataLakeDatasetRequest $args)
    {
        $result = parent::getDataLakeDataset($args->toArray());
        return new GetDataLakeDatasetResponse($result->toArray());
    }
}
