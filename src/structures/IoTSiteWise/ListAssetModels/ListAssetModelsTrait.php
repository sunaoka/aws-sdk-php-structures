<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModels;

trait ListAssetModelsTrait
{
    /**
     * @param ListAssetModelsRequest $args
     * @return ListAssetModelsResponse
     */
    public function listAssetModels(ListAssetModelsRequest $args)
    {
        $result = parent::listAssetModels($args->toArray());
        return new ListAssetModelsResponse($result->toArray());
    }
}
