<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateEventBridgeRuleTemplateGroup;

trait CreateEventBridgeRuleTemplateGroupTrait
{
    /**
     * @param CreateEventBridgeRuleTemplateGroupRequest $args
     * @return CreateEventBridgeRuleTemplateGroupResponse
     */
    public function createEventBridgeRuleTemplateGroup(CreateEventBridgeRuleTemplateGroupRequest $args)
    {
        $result = parent::createEventBridgeRuleTemplateGroup($args->toArray());
        return new CreateEventBridgeRuleTemplateGroupResponse($result->toArray());
    }
}
