<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ListProfileTimes;

trait ListProfileTimesTrait
{
    /**
     * @param ListProfileTimesRequest $args
     * @return ListProfileTimesResponse
     */
    public function listProfileTimes(ListProfileTimesRequest $args)
    {
        $result = parent::listProfileTimes($args->toArray());
        return new ListProfileTimesResponse($result->toArray());
    }
}
