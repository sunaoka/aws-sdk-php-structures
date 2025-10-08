<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateBranch;

trait CreateBranchTrait
{
    /**
     * @param CreateBranchRequest $args
     * @return void
     */
    public function createBranch(CreateBranchRequest $args)
    {
        parent::createBranch($args->toArray());
    }
}
