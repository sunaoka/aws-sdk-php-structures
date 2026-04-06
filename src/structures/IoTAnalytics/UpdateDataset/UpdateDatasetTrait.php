<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset;

trait UpdateDatasetTrait
{
    /**
     * @param UpdateDatasetRequest $args
     * @return void
     */
    public function updateDataset(UpdateDatasetRequest $args)
    {
        parent::updateDataset($args->toArray());
    }
}
