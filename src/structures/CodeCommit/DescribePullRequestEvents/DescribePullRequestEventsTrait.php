<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DescribePullRequestEvents;

trait DescribePullRequestEventsTrait
{
    /**
     * @param DescribePullRequestEventsRequest $args
     * @return DescribePullRequestEventsResponse
     */
    public function describePullRequestEvents(DescribePullRequestEventsRequest $args)
    {
        $result = parent::describePullRequestEvents($args->toArray());
        return new DescribePullRequestEventsResponse($result->toArray());
    }
}
