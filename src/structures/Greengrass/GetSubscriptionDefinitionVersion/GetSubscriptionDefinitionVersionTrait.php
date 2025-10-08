<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetSubscriptionDefinitionVersion;

trait GetSubscriptionDefinitionVersionTrait
{
    /**
     * @param GetSubscriptionDefinitionVersionRequest $args
     * @return GetSubscriptionDefinitionVersionResponse
     */
    public function getSubscriptionDefinitionVersion(GetSubscriptionDefinitionVersionRequest $args)
    {
        $result = parent::getSubscriptionDefinitionVersion($args->toArray());
        return new GetSubscriptionDefinitionVersionResponse($result->toArray());
    }
}
