<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModelCompositeModel;

trait CreateAssetModelCompositeModelTrait
{
    /**
     * @param CreateAssetModelCompositeModelRequest $args
     * @return CreateAssetModelCompositeModelResponse
     */
    public function createAssetModelCompositeModel(CreateAssetModelCompositeModelRequest $args)
    {
        $result = parent::createAssetModelCompositeModel($args->toArray());
        return new CreateAssetModelCompositeModelResponse($result->toArray());
    }
}
