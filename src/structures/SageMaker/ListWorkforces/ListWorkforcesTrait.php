<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListWorkforces;

trait ListWorkforcesTrait
{
    /**
     * @param ListWorkforcesRequest $args
     * @return ListWorkforcesResponse
     */
    public function listWorkforces(ListWorkforcesRequest $args)
    {
        $result = parent::listWorkforces($args->toArray());
        return new ListWorkforcesResponse($result->toArray());
    }
}
