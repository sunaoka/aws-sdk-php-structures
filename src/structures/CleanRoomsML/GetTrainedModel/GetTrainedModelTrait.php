<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetTrainedModel;

trait GetTrainedModelTrait
{
    /**
     * @param GetTrainedModelRequest $args
     * @return GetTrainedModelResponse
     */
    public function getTrainedModel(GetTrainedModelRequest $args)
    {
        $result = parent::getTrainedModel($args->toArray());
        return new GetTrainedModelResponse($result->toArray());
    }
}
