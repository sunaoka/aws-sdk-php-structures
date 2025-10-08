<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainingDataset;

trait GetTrainingDatasetTrait
{
    /**
     * @param GetTrainingDatasetRequest $args
     * @return GetTrainingDatasetResponse
     */
    public function getTrainingDataset(GetTrainingDatasetRequest $args)
    {
        $result = parent::getTrainingDataset($args->toArray());
        return new GetTrainingDatasetResponse($result->toArray());
    }
}
