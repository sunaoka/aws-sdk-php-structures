<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetDataset;

trait GetDatasetTrait
{
    /**
     * @param GetDatasetRequest $args
     * @return GetDatasetResponse
     */
    public function getDataset(GetDatasetRequest $args)
    {
        $result = parent::getDataset($args->toArray());
        return new GetDatasetResponse($result->toArray());
    }
}
