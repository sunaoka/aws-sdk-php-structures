<?php

namespace Sunaoka\Aws\Structures\Amplify\GetBranch;

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
