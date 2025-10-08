<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateComputationModel;

trait UpdateComputationModelTrait
{
    /**
     * @param UpdateComputationModelRequest $args
     * @return UpdateComputationModelResponse
     */
    public function updateComputationModel(UpdateComputationModelRequest $args)
    {
        $result = parent::updateComputationModel($args->toArray());
        return new UpdateComputationModelResponse($result->toArray());
    }
}
