<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateTrainingDataset;

trait CreateTrainingDatasetTrait
{
    /**
     * @param CreateTrainingDatasetRequest $args
     * @return CreateTrainingDatasetResponse
     */
    public function createTrainingDataset(CreateTrainingDatasetRequest $args)
    {
        $result = parent::createTrainingDataset($args->toArray());
        return new CreateTrainingDatasetResponse($result->toArray());
    }
}
