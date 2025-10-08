<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListSourceRepositoryBranches;

trait ListSourceRepositoryBranchesTrait
{
    /**
     * @param ListSourceRepositoryBranchesRequest $args
     * @return ListSourceRepositoryBranchesResponse
     */
    public function listSourceRepositoryBranches(ListSourceRepositoryBranchesRequest $args)
    {
        $result = parent::listSourceRepositoryBranches($args->toArray());
        return new ListSourceRepositoryBranchesResponse($result->toArray());
    }
}
