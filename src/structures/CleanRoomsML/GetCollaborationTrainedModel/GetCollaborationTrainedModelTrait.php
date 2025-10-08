<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetCollaborationTrainedModel;

trait GetCollaborationTrainedModelTrait
{
    /**
     * @param GetCollaborationTrainedModelRequest $args
     * @return GetCollaborationTrainedModelResponse
     */
    public function getCollaborationTrainedModel(GetCollaborationTrainedModelRequest $args)
    {
        $result = parent::getCollaborationTrainedModel($args->toArray());
        return new GetCollaborationTrainedModelResponse($result->toArray());
    }
}
