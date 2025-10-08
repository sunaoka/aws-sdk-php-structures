<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetSdkTypes;

trait GetSdkTypesTrait
{
    /**
     * @param GetSdkTypesRequest $args
     * @return GetSdkTypesResponse
     */
    public function getSdkTypes(GetSdkTypesRequest $args)
    {
        $result = parent::getSdkTypes($args->toArray());
        return new GetSdkTypesResponse($result->toArray());
    }
}
