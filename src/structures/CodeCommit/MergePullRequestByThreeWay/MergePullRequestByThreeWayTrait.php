<?php

namespace Sunaoka\Aws\Structures\CodeCommit\MergePullRequestByThreeWay;

trait MergePullRequestByThreeWayTrait
{
    /**
     * @param MergePullRequestByThreeWayRequest $args
     * @return MergePullRequestByThreeWayResponse
     */
    public function mergePullRequestByThreeWay(MergePullRequestByThreeWayRequest $args)
    {
        $result = parent::mergePullRequestByThreeWay($args->toArray());
        return new MergePullRequestByThreeWayResponse($result->toArray());
    }
}
