<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\CreateTrainedModel;

trait CreateTrainedModelTrait
{
    /**
     * @param CreateTrainedModelRequest $args
     * @return CreateTrainedModelResponse
     */
    public function createTrainedModel(CreateTrainedModelRequest $args)
    {
        $result = parent::createTrainedModel($args->toArray());
        return new CreateTrainedModelResponse($result->toArray());
    }
}
