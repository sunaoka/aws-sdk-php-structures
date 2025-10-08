<?php

namespace Sunaoka\Aws\Structures\Iot\ConfirmTopicRuleDestination;

trait ConfirmTopicRuleDestinationTrait
{
    /**
     * @param ConfirmTopicRuleDestinationRequest $args
     * @return ConfirmTopicRuleDestinationResponse
     */
    public function confirmTopicRuleDestination(ConfirmTopicRuleDestinationRequest $args)
    {
        $result = parent::confirmTopicRuleDestination($args->toArray());
        return new ConfirmTopicRuleDestinationResponse($result->toArray());
    }
}
