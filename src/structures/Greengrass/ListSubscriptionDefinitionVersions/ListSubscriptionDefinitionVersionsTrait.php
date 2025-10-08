<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListSubscriptionDefinitionVersions;

trait ListSubscriptionDefinitionVersionsTrait
{
    /**
     * @param ListSubscriptionDefinitionVersionsRequest $args
     * @return ListSubscriptionDefinitionVersionsResponse
     */
    public function listSubscriptionDefinitionVersions(ListSubscriptionDefinitionVersionsRequest $args)
    {
        $result = parent::listSubscriptionDefinitionVersions($args->toArray());
        return new ListSubscriptionDefinitionVersionsResponse($result->toArray());
    }
}
