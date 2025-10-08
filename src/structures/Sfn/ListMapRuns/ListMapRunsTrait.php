<?php

namespace Sunaoka\Aws\Structures\Sfn\ListMapRuns;

trait ListMapRunsTrait
{
    /**
     * @param ListMapRunsRequest $args
     * @return ListMapRunsResponse
     */
    public function listMapRuns(ListMapRunsRequest $args)
    {
        $result = parent::listMapRuns($args->toArray());
        return new ListMapRunsResponse($result->toArray());
    }
}
