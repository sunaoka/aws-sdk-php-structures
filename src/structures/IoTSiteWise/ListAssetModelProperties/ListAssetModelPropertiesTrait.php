<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelProperties;

trait ListAssetModelPropertiesTrait
{
    /**
     * @param ListAssetModelPropertiesRequest $args
     * @return ListAssetModelPropertiesResponse
     */
    public function listAssetModelProperties(ListAssetModelPropertiesRequest $args)
    {
        $result = parent::listAssetModelProperties($args->toArray());
        return new ListAssetModelPropertiesResponse($result->toArray());
    }
}
