<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListSubCheckResults;

trait ListSubCheckResultsTrait
{
    /**
     * @param ListSubCheckResultsRequest $args
     * @return ListSubCheckResultsResponse
     */
    public function listSubCheckResults(ListSubCheckResultsRequest $args)
    {
        $result = parent::listSubCheckResults($args->toArray());
        return new ListSubCheckResultsResponse($result->toArray());
    }
}
