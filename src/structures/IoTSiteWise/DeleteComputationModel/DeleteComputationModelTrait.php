<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteComputationModel;

trait DeleteComputationModelTrait
{
    /**
     * @param DeleteComputationModelRequest $args
     * @return DeleteComputationModelResponse
     */
    public function deleteComputationModel(DeleteComputationModelRequest $args)
    {
        $result = parent::deleteComputationModel($args->toArray());
        return new DeleteComputationModelResponse($result->toArray());
    }
}
