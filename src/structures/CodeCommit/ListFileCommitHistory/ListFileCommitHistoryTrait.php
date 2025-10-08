<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListFileCommitHistory;

trait ListFileCommitHistoryTrait
{
    /**
     * @param ListFileCommitHistoryRequest $args
     * @return ListFileCommitHistoryResponse
     */
    public function listFileCommitHistory(ListFileCommitHistoryRequest $args)
    {
        $result = parent::listFileCommitHistory($args->toArray());
        return new ListFileCommitHistoryResponse($result->toArray());
    }
}
