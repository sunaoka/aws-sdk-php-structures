<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStacks;

trait ListStacksTrait
{
    /**
     * @param ListStacksRequest $args
     * @return ListStacksResponse
     */
    public function listStacks(ListStacksRequest $args)
    {
        $result = parent::listStacks($args->toArray());
        return new ListStacksResponse($result->toArray());
    }
}
