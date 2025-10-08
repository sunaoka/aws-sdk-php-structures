<?php

namespace Sunaoka\Aws\Structures\AppSync\ListResolvers;

trait ListResolversTrait
{
    /**
     * @param ListResolversRequest $args
     * @return ListResolversResponse
     */
    public function listResolvers(ListResolversRequest $args)
    {
        $result = parent::listResolvers($args->toArray());
        return new ListResolversResponse($result->toArray());
    }
}
