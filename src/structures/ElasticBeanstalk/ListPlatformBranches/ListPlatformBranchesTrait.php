<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ListPlatformBranches;

trait ListPlatformBranchesTrait
{
    /**
     * @param ListPlatformBranchesRequest $args
     * @return ListPlatformBranchesResponse
     */
    public function listPlatformBranches(ListPlatformBranchesRequest $args)
    {
        $result = parent::listPlatformBranches($args->toArray());
        return new ListPlatformBranchesResponse($result->toArray());
    }
}
