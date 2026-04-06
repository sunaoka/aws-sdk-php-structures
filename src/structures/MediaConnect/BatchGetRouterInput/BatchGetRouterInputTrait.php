<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterInput;

trait BatchGetRouterInputTrait
{
    /**
     * @param BatchGetRouterInputRequest $args
     * @return BatchGetRouterInputResponse
     */
    public function batchGetRouterInput(BatchGetRouterInputRequest $args)
    {
        $result = parent::batchGetRouterInput($args->toArray());
        return new BatchGetRouterInputResponse($result->toArray());
    }
}
