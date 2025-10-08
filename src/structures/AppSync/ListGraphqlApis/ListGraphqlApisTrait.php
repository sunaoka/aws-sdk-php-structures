<?php

namespace Sunaoka\Aws\Structures\AppSync\ListGraphqlApis;

trait ListGraphqlApisTrait
{
    /**
     * @param ListGraphqlApisRequest $args
     * @return ListGraphqlApisResponse
     */
    public function listGraphqlApis(ListGraphqlApisRequest $args)
    {
        $result = parent::listGraphqlApis($args->toArray());
        return new ListGraphqlApisResponse($result->toArray());
    }
}
