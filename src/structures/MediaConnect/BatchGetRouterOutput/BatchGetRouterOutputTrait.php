<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterOutput;

trait BatchGetRouterOutputTrait
{
    /**
     * @param BatchGetRouterOutputRequest $args
     * @return BatchGetRouterOutputResponse
     */
    public function batchGetRouterOutput(BatchGetRouterOutputRequest $args)
    {
        $result = parent::batchGetRouterOutput($args->toArray());
        return new BatchGetRouterOutputResponse($result->toArray());
    }
}
