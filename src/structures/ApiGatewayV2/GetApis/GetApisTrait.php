<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetApis;

trait GetApisTrait
{
    /**
     * @param GetApisRequest $args
     * @return GetApisResponse
     */
    public function getApis(GetApisRequest $args)
    {
        $result = parent::getApis($args->toArray());
        return new GetApisResponse($result->toArray());
    }
}
