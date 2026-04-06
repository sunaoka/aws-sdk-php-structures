<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListGlobalResolvers;

trait ListGlobalResolversTrait
{
    /**
     * @param ListGlobalResolversRequest $args
     * @return ListGlobalResolversResponse
     */
    public function listGlobalResolvers(ListGlobalResolversRequest $args)
    {
        $result = parent::listGlobalResolvers($args->toArray());
        return new ListGlobalResolversResponse($result->toArray());
    }
}
