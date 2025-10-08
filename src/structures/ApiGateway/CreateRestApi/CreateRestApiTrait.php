<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateRestApi;

trait CreateRestApiTrait
{
    /**
     * @param CreateRestApiRequest $args
     * @return CreateRestApiResponse
     */
    public function createRestApi(CreateRestApiRequest $args)
    {
        $result = parent::createRestApi($args->toArray());
        return new CreateRestApiResponse($result->toArray());
    }
}
