<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListRuns;

trait ListRunsTrait
{
    /**
     * @param ListRunsRequest $args
     * @return ListRunsResponse
     */
    public function listRuns(ListRunsRequest $args)
    {
        $result = parent::listRuns($args->toArray());
        return new ListRunsResponse($result->toArray());
    }
}
