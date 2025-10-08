<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateApi;

trait CreateApiTrait
{
    /**
     * @param CreateApiRequest $args
     * @return CreateApiResponse
     */
    public function createApi(CreateApiRequest $args)
    {
        $result = parent::createApi($args->toArray());
        return new CreateApiResponse($result->toArray());
    }
}
