<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\NotifyRecommendationsReceived;

trait NotifyRecommendationsReceivedTrait
{
    /**
     * @param NotifyRecommendationsReceivedRequest $args
     * @return NotifyRecommendationsReceivedResponse
     */
    public function notifyRecommendationsReceived(NotifyRecommendationsReceivedRequest $args)
    {
        $result = parent::notifyRecommendationsReceived($args->toArray());
        return new NotifyRecommendationsReceivedResponse($result->toArray());
    }
}
