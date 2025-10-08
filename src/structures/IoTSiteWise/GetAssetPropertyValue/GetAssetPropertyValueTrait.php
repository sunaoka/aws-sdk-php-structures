<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetAssetPropertyValue;

trait GetAssetPropertyValueTrait
{
    /**
     * @param GetAssetPropertyValueRequest $args
     * @return GetAssetPropertyValueResponse
     */
    public function getAssetPropertyValue(GetAssetPropertyValueRequest $args)
    {
        $result = parent::getAssetPropertyValue($args->toArray());
        return new GetAssetPropertyValueResponse($result->toArray());
    }
}
