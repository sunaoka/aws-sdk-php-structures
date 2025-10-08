<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateSubscriptionDefinitionVersion;

trait CreateSubscriptionDefinitionVersionTrait
{
    /**
     * @param CreateSubscriptionDefinitionVersionRequest $args
     * @return CreateSubscriptionDefinitionVersionResponse
     */
    public function createSubscriptionDefinitionVersion(CreateSubscriptionDefinitionVersionRequest $args)
    {
        $result = parent::createSubscriptionDefinitionVersion($args->toArray());
        return new CreateSubscriptionDefinitionVersionResponse($result->toArray());
    }
}
