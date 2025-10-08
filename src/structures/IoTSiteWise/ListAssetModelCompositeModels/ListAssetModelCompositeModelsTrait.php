<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelCompositeModels;

trait ListAssetModelCompositeModelsTrait
{
    /**
     * @param ListAssetModelCompositeModelsRequest $args
     * @return ListAssetModelCompositeModelsResponse
     */
    public function listAssetModelCompositeModels(ListAssetModelCompositeModelsRequest $args)
    {
        $result = parent::listAssetModelCompositeModels($args->toArray());
        return new ListAssetModelCompositeModelsResponse($result->toArray());
    }
}
