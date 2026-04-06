<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListFeeds;

trait ListFeedsTrait
{
    /**
     * @param ListFeedsRequest $args
     * @return ListFeedsResponse
     */
    public function listFeeds(ListFeedsRequest $args)
    {
        $result = parent::listFeeds($args->toArray());
        return new ListFeedsResponse($result->toArray());
    }
}
