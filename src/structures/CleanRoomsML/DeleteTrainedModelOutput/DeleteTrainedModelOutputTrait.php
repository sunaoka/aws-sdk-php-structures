<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteTrainedModelOutput;

trait DeleteTrainedModelOutputTrait
{
    /**
     * @param DeleteTrainedModelOutputRequest $args
     * @return void
     */
    public function deleteTrainedModelOutput(DeleteTrainedModelOutputRequest $args)
    {
        parent::deleteTrainedModelOutput($args->toArray());
    }
}
