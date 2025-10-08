<?php

namespace Sunaoka\Aws\Structures\SupplyChain\DeleteDataLakeDataset;

trait DeleteDataLakeDatasetTrait
{
    /**
     * @param DeleteDataLakeDatasetRequest $args
     * @return DeleteDataLakeDatasetResponse
     */
    public function deleteDataLakeDataset(DeleteDataLakeDatasetRequest $args)
    {
        $result = parent::deleteDataLakeDataset($args->toArray());
        return new DeleteDataLakeDatasetResponse($result->toArray());
    }
}
