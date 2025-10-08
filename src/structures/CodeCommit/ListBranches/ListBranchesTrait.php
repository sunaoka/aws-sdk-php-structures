<?php

namespace Sunaoka\Aws\Structures\CodeCommit\ListBranches;

trait ListBranchesTrait
{
    /**
     * @param ListBranchesRequest $args
     * @return ListBranchesResponse
     */
    public function listBranches(ListBranchesRequest $args)
    {
        $result = parent::listBranches($args->toArray());
        return new ListBranchesResponse($result->toArray());
    }
}
