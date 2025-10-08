<?php

namespace Sunaoka\Aws\Structures\Transfer\ListFileTransferResults;

trait ListFileTransferResultsTrait
{
    /**
     * @param ListFileTransferResultsRequest $args
     * @return ListFileTransferResultsResponse
     */
    public function listFileTransferResults(ListFileTransferResultsRequest $args)
    {
        $result = parent::listFileTransferResults($args->toArray());
        return new ListFileTransferResultsResponse($result->toArray());
    }
}
