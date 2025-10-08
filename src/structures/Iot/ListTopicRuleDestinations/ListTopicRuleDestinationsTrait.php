<?php

namespace Sunaoka\Aws\Structures\Iot\ListTopicRuleDestinations;

trait ListTopicRuleDestinationsTrait
{
    /**
     * @param ListTopicRuleDestinationsRequest $args
     * @return ListTopicRuleDestinationsResponse
     */
    public function listTopicRuleDestinations(ListTopicRuleDestinationsRequest $args)
    {
        $result = parent::listTopicRuleDestinations($args->toArray());
        return new ListTopicRuleDestinationsResponse($result->toArray());
    }
}
