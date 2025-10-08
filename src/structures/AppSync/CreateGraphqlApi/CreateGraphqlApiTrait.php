<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateGraphqlApi;

trait CreateGraphqlApiTrait
{
    /**
     * @param CreateGraphqlApiRequest $args
     * @return CreateGraphqlApiResponse
     */
    public function createGraphqlApi(CreateGraphqlApiRequest $args)
    {
        $result = parent::createGraphqlApi($args->toArray());
        return new CreateGraphqlApiResponse($result->toArray());
    }
}
