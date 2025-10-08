<?php

namespace Sunaoka\Aws\Structures\Sns\ListSubscriptionsByTopic;

trait ListSubscriptionsByTopicTrait
{
    /**
     * @param ListSubscriptionsByTopicRequest $args
     * @return ListSubscriptionsByTopicResponse
     */
    public function listSubscriptionsByTopic(ListSubscriptionsByTopicRequest $args)
    {
        $result = parent::listSubscriptionsByTopic($args->toArray());
        return new ListSubscriptionsByTopicResponse($result->toArray());
    }
}
