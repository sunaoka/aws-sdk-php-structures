<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationTrainedModels;

trait ListCollaborationTrainedModelsTrait
{
    /**
     * @param ListCollaborationTrainedModelsRequest $args
     * @return ListCollaborationTrainedModelsResponse
     */
    public function listCollaborationTrainedModels(ListCollaborationTrainedModelsRequest $args)
    {
        $result = parent::listCollaborationTrainedModels($args->toArray());
        return new ListCollaborationTrainedModelsResponse($result->toArray());
    }
}
