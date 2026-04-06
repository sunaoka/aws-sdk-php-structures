<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteAssetModelCompositeModel;

trait DeleteAssetModelCompositeModelTrait
{
    /**
     * @param DeleteAssetModelCompositeModelRequest $args
     * @return DeleteAssetModelCompositeModelResponse
     */
    public function deleteAssetModelCompositeModel(DeleteAssetModelCompositeModelRequest $args)
    {
        $result = parent::deleteAssetModelCompositeModel($args->toArray());
        return new DeleteAssetModelCompositeModelResponse($result->toArray());
    }
}
