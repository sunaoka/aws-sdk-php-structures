<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateBranch;

trait CreateBranchTrait
{
    /**
     * @param CreateBranchRequest $args
     * @return CreateBranchResponse
     */
    public function createBranch(CreateBranchRequest $args)
    {
        $result = parent::createBranch($args->toArray());
        return new CreateBranchResponse($result->toArray());
    }
}
