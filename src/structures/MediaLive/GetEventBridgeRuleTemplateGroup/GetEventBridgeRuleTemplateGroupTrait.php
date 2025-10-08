<?php

namespace Sunaoka\Aws\Structures\MediaLive\GetEventBridgeRuleTemplateGroup;

trait GetEventBridgeRuleTemplateGroupTrait
{
    /**
     * @param GetEventBridgeRuleTemplateGroupRequest $args
     * @return GetEventBridgeRuleTemplateGroupResponse
     */
    public function getEventBridgeRuleTemplateGroup(GetEventBridgeRuleTemplateGroupRequest $args)
    {
        $result = parent::getEventBridgeRuleTemplateGroup($args->toArray());
        return new GetEventBridgeRuleTemplateGroupResponse($result->toArray());
    }
}
