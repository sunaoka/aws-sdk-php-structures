<?php

namespace Sunaoka\Aws\Structures\AppSync\GetGraphqlApi;

trait GetGraphqlApiTrait
{
    /**
     * @param GetGraphqlApiRequest $args
     * @return GetGraphqlApiResponse
     */
    public function getGraphqlApi(GetGraphqlApiRequest $args)
    {
        $result = parent::getGraphqlApi($args->toArray());
        return new GetGraphqlApiResponse($result->toArray());
    }
}
