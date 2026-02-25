<?php

namespace Sunaoka\Aws\Structures\ElementalInference\AssociateFeed;

trait AssociateFeedTrait
{
    /**
     * @param AssociateFeedRequest $args
     * @return AssociateFeedResponse
     */
    public function associateFeed(AssociateFeedRequest $args)
    {
        $result = parent::associateFeed($args->toArray());
        return new AssociateFeedResponse($result->toArray());
    }
}
