<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRuleDestination;

trait GetTopicRuleDestinationTrait
{
    /**
     * @param GetTopicRuleDestinationRequest $args
     * @return GetTopicRuleDestinationResponse
     */
    public function getTopicRuleDestination(GetTopicRuleDestinationRequest $args)
    {
        $result = parent::getTopicRuleDestination($args->toArray());
        return new GetTopicRuleDestinationResponse($result->toArray());
    }
}
