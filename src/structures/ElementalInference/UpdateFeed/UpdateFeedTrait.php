<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateFeed;

trait UpdateFeedTrait
{
    /**
     * @param UpdateFeedRequest $args
     * @return UpdateFeedResponse
     */
    public function updateFeed(UpdateFeedRequest $args)
    {
        $result = parent::updateFeed($args->toArray());
        return new UpdateFeedResponse($result->toArray());
    }
}
