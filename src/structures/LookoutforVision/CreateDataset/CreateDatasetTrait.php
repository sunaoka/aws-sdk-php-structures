<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\CreateDataset;

trait CreateDatasetTrait
{
    /**
     * @param CreateDatasetRequest $args
     * @return CreateDatasetResponse
     */
    public function createDataset(CreateDatasetRequest $args)
    {
        $result = parent::createDataset($args->toArray());
        return new CreateDatasetResponse($result->toArray());
    }
}
