<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetFeed;

trait GetFeedTrait
{
    /**
     * @param GetFeedRequest $args
     * @return GetFeedResponse
     */
    public function getFeed(GetFeedRequest $args)
    {
        $result = parent::getFeed($args->toArray());
        return new GetFeedResponse($result->toArray());
    }
}
