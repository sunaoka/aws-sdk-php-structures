<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRuleDestination;

trait CreateTopicRuleDestinationTrait
{
    /**
     * @param CreateTopicRuleDestinationRequest $args
     * @return CreateTopicRuleDestinationResponse
     */
    public function createTopicRuleDestination(CreateTopicRuleDestinationRequest $args)
    {
        $result = parent::createTopicRuleDestination($args->toArray());
        return new CreateTopicRuleDestinationResponse($result->toArray());
    }
}
