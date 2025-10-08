<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetModel;

trait UpdateAssetModelTrait
{
    /**
     * @param UpdateAssetModelRequest $args
     * @return UpdateAssetModelResponse
     */
    public function updateAssetModel(UpdateAssetModelRequest $args)
    {
        $result = parent::updateAssetModel($args->toArray());
        return new UpdateAssetModelResponse($result->toArray());
    }
}
