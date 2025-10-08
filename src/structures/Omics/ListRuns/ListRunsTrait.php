<?php

namespace Sunaoka\Aws\Structures\Omics\ListRuns;

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
