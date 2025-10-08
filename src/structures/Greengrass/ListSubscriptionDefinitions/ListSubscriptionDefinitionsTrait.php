<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListSubscriptionDefinitions;

trait ListSubscriptionDefinitionsTrait
{
    /**
     * @param ListSubscriptionDefinitionsRequest $args
     * @return ListSubscriptionDefinitionsResponse
     */
    public function listSubscriptionDefinitions(ListSubscriptionDefinitionsRequest $args)
    {
        $result = parent::listSubscriptionDefinitions($args->toArray());
        return new ListSubscriptionDefinitionsResponse($result->toArray());
    }
}
