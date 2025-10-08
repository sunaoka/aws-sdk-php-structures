<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateSubscriptionDefinition;

trait CreateSubscriptionDefinitionTrait
{
    /**
     * @param CreateSubscriptionDefinitionRequest $args
     * @return CreateSubscriptionDefinitionResponse
     */
    public function createSubscriptionDefinition(CreateSubscriptionDefinitionRequest $args)
    {
        $result = parent::createSubscriptionDefinition($args->toArray());
        return new CreateSubscriptionDefinitionResponse($result->toArray());
    }
}
