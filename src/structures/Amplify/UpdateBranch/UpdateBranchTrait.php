<?php

namespace Sunaoka\Aws\Structures\Amplify\UpdateBranch;

trait UpdateBranchTrait
{
    /**
     * @param UpdateBranchRequest $args
     * @return UpdateBranchResponse
     */
    public function updateBranch(UpdateBranchRequest $args)
    {
        $result = parent::updateBranch($args->toArray());
        return new UpdateBranchResponse($result->toArray());
    }
}
