<?php

namespace Sunaoka\Aws\Structures\Ecr\ListPullTimeUpdateExclusions;

trait ListPullTimeUpdateExclusionsTrait
{
    /**
     * @param ListPullTimeUpdateExclusionsRequest $args
     * @return ListPullTimeUpdateExclusionsResponse
     */
    public function listPullTimeUpdateExclusions(ListPullTimeUpdateExclusionsRequest $args)
    {
        $result = parent::listPullTimeUpdateExclusions($args->toArray());
        return new ListPullTimeUpdateExclusionsResponse($result->toArray());
    }
}
