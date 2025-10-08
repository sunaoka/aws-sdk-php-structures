<?php

namespace Sunaoka\Aws\Structures\Greengrass\UpdateSubscriptionDefinition;

trait UpdateSubscriptionDefinitionTrait
{
    /**
     * @param UpdateSubscriptionDefinitionRequest $args
     * @return UpdateSubscriptionDefinitionResponse
     */
    public function updateSubscriptionDefinition(UpdateSubscriptionDefinitionRequest $args)
    {
        $result = parent::updateSubscriptionDefinition($args->toArray());
        return new UpdateSubscriptionDefinitionResponse($result->toArray());
    }
}
