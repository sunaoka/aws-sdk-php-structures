<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetProperties;

trait ListAssetPropertiesTrait
{
    /**
     * @param ListAssetPropertiesRequest $args
     * @return ListAssetPropertiesResponse
     */
    public function listAssetProperties(ListAssetPropertiesRequest $args)
    {
        $result = parent::listAssetProperties($args->toArray());
        return new ListAssetPropertiesResponse($result->toArray());
    }
}
