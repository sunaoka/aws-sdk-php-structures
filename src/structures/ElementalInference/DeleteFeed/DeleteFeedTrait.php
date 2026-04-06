<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DeleteFeed;

trait DeleteFeedTrait
{
    /**
     * @param DeleteFeedRequest $args
     * @return DeleteFeedResponse
     */
    public function deleteFeed(DeleteFeedRequest $args)
    {
        $result = parent::deleteFeed($args->toArray());
        return new DeleteFeedResponse($result->toArray());
    }
}
