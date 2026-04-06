<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListTrainedModels;

trait ListTrainedModelsTrait
{
    /**
     * @param ListTrainedModelsRequest $args
     * @return ListTrainedModelsResponse
     */
    public function listTrainedModels(ListTrainedModelsRequest $args)
    {
        $result = parent::listTrainedModels($args->toArray());
        return new ListTrainedModelsResponse($result->toArray());
    }
}
