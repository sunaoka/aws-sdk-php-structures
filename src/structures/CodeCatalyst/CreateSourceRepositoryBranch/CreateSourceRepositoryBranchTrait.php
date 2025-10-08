<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\CreateSourceRepositoryBranch;

trait CreateSourceRepositoryBranchTrait
{
    /**
     * @param CreateSourceRepositoryBranchRequest $args
     * @return CreateSourceRepositoryBranchResponse
     */
    public function createSourceRepositoryBranch(CreateSourceRepositoryBranchRequest $args)
    {
        $result = parent::createSourceRepositoryBranch($args->toArray());
        return new CreateSourceRepositoryBranchResponse($result->toArray());
    }
}
