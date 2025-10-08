<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CancelTrainedModel;

trait CancelTrainedModelTrait
{
    /**
     * @param CancelTrainedModelRequest $args
     * @return void
     */
    public function cancelTrainedModel(CancelTrainedModelRequest $args)
    {
        parent::cancelTrainedModel($args->toArray());
    }
}
