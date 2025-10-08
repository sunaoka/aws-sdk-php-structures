<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetSubscriptionDefinition;

trait GetSubscriptionDefinitionTrait
{
    /**
     * @param GetSubscriptionDefinitionRequest $args
     * @return GetSubscriptionDefinitionResponse
     */
    public function getSubscriptionDefinition(GetSubscriptionDefinitionRequest $args)
    {
        $result = parent::getSubscriptionDefinition($args->toArray());
        return new GetSubscriptionDefinitionResponse($result->toArray());
    }
}
