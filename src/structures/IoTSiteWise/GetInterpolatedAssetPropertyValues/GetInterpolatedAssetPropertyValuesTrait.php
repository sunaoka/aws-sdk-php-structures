<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetInterpolatedAssetPropertyValues;

trait GetInterpolatedAssetPropertyValuesTrait
{
    /**
     * @param GetInterpolatedAssetPropertyValuesRequest $args
     * @return GetInterpolatedAssetPropertyValuesResponse
     */
    public function getInterpolatedAssetPropertyValues(GetInterpolatedAssetPropertyValuesRequest $args)
    {
        $result = parent::getInterpolatedAssetPropertyValues($args->toArray());
        return new GetInterpolatedAssetPropertyValuesResponse($result->toArray());
    }
}
