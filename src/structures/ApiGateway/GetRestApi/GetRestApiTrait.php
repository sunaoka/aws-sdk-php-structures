<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetRestApi;

trait GetRestApiTrait
{
    /**
     * @param GetRestApiRequest $args
     * @return GetRestApiResponse
     */
    public function getRestApi(GetRestApiRequest $args)
    {
        $result = parent::getRestApi($args->toArray());
        return new GetRestApiResponse($result->toArray());
    }
}
