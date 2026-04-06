<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModels;

trait ListComputationModelsTrait
{
    /**
     * @param ListComputationModelsRequest $args
     * @return ListComputationModelsResponse
     */
    public function listComputationModels(ListComputationModelsRequest $args)
    {
        $result = parent::listComputationModels($args->toArray());
        return new ListComputationModelsResponse($result->toArray());
    }
}
