<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateDataLakeDataset;

trait UpdateDataLakeDatasetTrait
{
    /**
     * @param UpdateDataLakeDatasetRequest $args
     * @return UpdateDataLakeDatasetResponse
     */
    public function updateDataLakeDataset(UpdateDataLakeDatasetRequest $args)
    {
        $result = parent::updateDataLakeDataset($args->toArray());
        return new UpdateDataLakeDatasetResponse($result->toArray());
    }
}
