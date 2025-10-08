<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetSdk;

trait GetSdkTrait
{
    /**
     * @param GetSdkRequest $args
     * @return GetSdkResponse
     */
    public function getSdk(GetSdkRequest $args)
    {
        $result = parent::getSdk($args->toArray());
        return new GetSdkResponse($result->toArray());
    }
}
