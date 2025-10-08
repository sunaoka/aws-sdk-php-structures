<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListOutpostResolvers;

trait ListOutpostResolversTrait
{
    /**
     * @param ListOutpostResolversRequest $args
     * @return ListOutpostResolversResponse
     */
    public function listOutpostResolvers(ListOutpostResolversRequest $args)
    {
        $result = parent::listOutpostResolvers($args->toArray());
        return new ListOutpostResolversResponse($result->toArray());
    }
}
