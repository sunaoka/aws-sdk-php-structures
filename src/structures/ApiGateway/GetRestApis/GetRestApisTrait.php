<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetRestApis;

trait GetRestApisTrait
{
    /**
     * @param GetRestApisRequest $args
     * @return GetRestApisResponse
     */
    public function getRestApis(GetRestApisRequest $args)
    {
        $result = parent::getRestApis($args->toArray());
        return new GetRestApisResponse($result->toArray());
    }
}
