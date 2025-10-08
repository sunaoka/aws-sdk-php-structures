<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateTopicRuleDestination;

trait UpdateTopicRuleDestinationTrait
{
    /**
     * @param UpdateTopicRuleDestinationRequest $args
     * @return UpdateTopicRuleDestinationResponse
     */
    public function updateTopicRuleDestination(UpdateTopicRuleDestinationRequest $args)
    {
        $result = parent::updateTopicRuleDestination($args->toArray());
        return new UpdateTopicRuleDestinationResponse($result->toArray());
    }
}
