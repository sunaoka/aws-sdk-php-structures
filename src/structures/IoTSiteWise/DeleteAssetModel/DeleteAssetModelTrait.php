<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteAssetModel;

trait DeleteAssetModelTrait
{
    /**
     * @param DeleteAssetModelRequest $args
     * @return DeleteAssetModelResponse
     */
    public function deleteAssetModel(DeleteAssetModelRequest $args)
    {
        $result = parent::deleteAssetModel($args->toArray());
        return new DeleteAssetModelResponse($result->toArray());
    }
}
