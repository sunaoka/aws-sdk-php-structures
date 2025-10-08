<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateDefaultBranch;

trait UpdateDefaultBranchTrait
{
    /**
     * @param UpdateDefaultBranchRequest $args
     * @return void
     */
    public function updateDefaultBranch(UpdateDefaultBranchRequest $args)
    {
        parent::updateDefaultBranch($args->toArray());
    }
}
