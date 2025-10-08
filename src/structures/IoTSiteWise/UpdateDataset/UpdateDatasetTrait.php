<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateDataset;

trait UpdateDatasetTrait
{
    /**
     * @param UpdateDatasetRequest $args
     * @return UpdateDatasetResponse
     */
    public function updateDataset(UpdateDatasetRequest $args)
    {
        $result = parent::updateDataset($args->toArray());
        return new UpdateDatasetResponse($result->toArray());
    }
}
