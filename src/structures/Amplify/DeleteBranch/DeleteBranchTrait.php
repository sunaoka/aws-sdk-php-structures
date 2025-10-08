<?php

namespace Sunaoka\Aws\Structures\Amplify\DeleteBranch;

trait DeleteBranchTrait
{
    /**
     * @param DeleteBranchRequest $args
     * @return DeleteBranchResponse
     */
    public function deleteBranch(DeleteBranchRequest $args)
    {
        $result = parent::deleteBranch($args->toArray());
        return new DeleteBranchResponse($result->toArray());
    }
}
