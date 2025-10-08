<?php

namespace Sunaoka\Aws\Structures\Proton\ListEnvironmentOutputs;

trait ListEnvironmentOutputsTrait
{
    /**
     * @param ListEnvironmentOutputsRequest $args
     * @return ListEnvironmentOutputsResponse
     */
    public function listEnvironmentOutputs(ListEnvironmentOutputsRequest $args)
    {
        $result = parent::listEnvironmentOutputs($args->toArray());
        return new ListEnvironmentOutputsResponse($result->toArray());
    }
}
