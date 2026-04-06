<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteTrainingDataset;

trait DeleteTrainingDatasetTrait
{
    /**
     * @param DeleteTrainingDatasetRequest $args
     * @return void
     */
    public function deleteTrainingDataset(DeleteTrainingDatasetRequest $args)
    {
        parent::deleteTrainingDataset($args->toArray());
    }
}
