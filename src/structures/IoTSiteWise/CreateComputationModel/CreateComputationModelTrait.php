<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateComputationModel;

trait CreateComputationModelTrait
{
    /**
     * @param CreateComputationModelRequest $args
     * @return CreateComputationModelResponse
     */
    public function createComputationModel(CreateComputationModelRequest $args)
    {
        $result = parent::createComputationModel($args->toArray());
        return new CreateComputationModelResponse($result->toArray());
    }
}
