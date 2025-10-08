<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteTopicRuleDestination;

trait DeleteTopicRuleDestinationTrait
{
    /**
     * @param DeleteTopicRuleDestinationRequest $args
     * @return DeleteTopicRuleDestinationResponse
     */
    public function deleteTopicRuleDestination(DeleteTopicRuleDestinationRequest $args)
    {
        $result = parent::deleteTopicRuleDestination($args->toArray());
        return new DeleteTopicRuleDestinationResponse($result->toArray());
    }
}
