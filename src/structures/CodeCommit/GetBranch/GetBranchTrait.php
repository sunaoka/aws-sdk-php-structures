<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetBranch;

trait GetBranchTrait
{
    /**
     * @param GetBranchRequest $args
     * @return GetBranchResponse
     */
    public function getBranch(GetBranchRequest $args)
    {
        $result = parent::getBranch($args->toArray());
        return new GetBranchResponse($result->toArray());
    }
}
