<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModel;

trait CreateAssetModelTrait
{
    /**
     * @param CreateAssetModelRequest $args
     * @return CreateAssetModelResponse
     */
    public function createAssetModel(CreateAssetModelRequest $args)
    {
        $result = parent::createAssetModel($args->toArray());
        return new CreateAssetModelResponse($result->toArray());
    }
}
