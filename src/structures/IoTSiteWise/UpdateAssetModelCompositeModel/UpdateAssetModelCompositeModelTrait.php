<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetModelCompositeModel;

trait UpdateAssetModelCompositeModelTrait
{
    /**
     * @param UpdateAssetModelCompositeModelRequest $args
     * @return UpdateAssetModelCompositeModelResponse
     */
    public function updateAssetModelCompositeModel(UpdateAssetModelCompositeModelRequest $args)
    {
        $result = parent::updateAssetModelCompositeModel($args->toArray());
        return new UpdateAssetModelCompositeModelResponse($result->toArray());
    }
}
