<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListContexts;

trait ListContextsTrait
{
    /**
     * @param ListContextsRequest $args
     * @return ListContextsResponse
     */
    public function listContexts(ListContextsRequest $args)
    {
        $result = parent::listContexts($args->toArray());
        return new ListContextsResponse($result->toArray());
    }
}
