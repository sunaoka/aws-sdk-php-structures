<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetSdkType;

trait GetSdkTypeTrait
{
    /**
     * @param GetSdkTypeRequest $args
     * @return GetSdkTypeResponse
     */
    public function getSdkType(GetSdkTypeRequest $args)
    {
        $result = parent::getSdkType($args->toArray());
        return new GetSdkTypeResponse($result->toArray());
    }
}
