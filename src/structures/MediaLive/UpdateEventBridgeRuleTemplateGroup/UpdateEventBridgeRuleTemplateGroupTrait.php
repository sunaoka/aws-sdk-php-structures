<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateEventBridgeRuleTemplateGroup;

trait UpdateEventBridgeRuleTemplateGroupTrait
{
    /**
     * @param UpdateEventBridgeRuleTemplateGroupRequest $args
     * @return UpdateEventBridgeRuleTemplateGroupResponse
     */
    public function updateEventBridgeRuleTemplateGroup(UpdateEventBridgeRuleTemplateGroupRequest $args)
    {
        $result = parent::updateEventBridgeRuleTemplateGroup($args->toArray());
        return new UpdateEventBridgeRuleTemplateGroupResponse($result->toArray());
    }
}
