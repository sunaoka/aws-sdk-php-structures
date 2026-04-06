<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateFeed;

trait CreateFeedTrait
{
    /**
     * @param CreateFeedRequest $args
     * @return CreateFeedResponse
     */
    public function createFeed(CreateFeedRequest $args)
    {
        $result = parent::createFeed($args->toArray());
        return new CreateFeedResponse($result->toArray());
    }
}
