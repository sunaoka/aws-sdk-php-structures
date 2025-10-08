<?php

namespace Sunaoka\Aws\Structures\AppSync\ListResolversByFunction;

trait ListResolversByFunctionTrait
{
    /**
     * @param ListResolversByFunctionRequest $args
     * @return ListResolversByFunctionResponse
     */
    public function listResolversByFunction(ListResolversByFunctionRequest $args)
    {
        $result = parent::listResolversByFunction($args->toArray());
        return new ListResolversByFunctionResponse($result->toArray());
    }
}
