<?php

namespace Sunaoka\Aws\Structures\Greengrass\DeleteSubscriptionDefinition;

trait DeleteSubscriptionDefinitionTrait
{
    /**
     * @param DeleteSubscriptionDefinitionRequest $args
     * @return DeleteSubscriptionDefinitionResponse
     */
    public function deleteSubscriptionDefinition(DeleteSubscriptionDefinitionRequest $args)
    {
        $result = parent::deleteSubscriptionDefinition($args->toArray());
        return new DeleteSubscriptionDefinitionResponse($result->toArray());
    }
}
