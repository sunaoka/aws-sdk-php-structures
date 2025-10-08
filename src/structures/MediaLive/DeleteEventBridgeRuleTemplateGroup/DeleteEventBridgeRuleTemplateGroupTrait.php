<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteEventBridgeRuleTemplateGroup;

trait DeleteEventBridgeRuleTemplateGroupTrait
{
    /**
     * @param DeleteEventBridgeRuleTemplateGroupRequest $args
     * @return void
     */
    public function deleteEventBridgeRuleTemplateGroup(DeleteEventBridgeRuleTemplateGroupRequest $args)
    {
        parent::deleteEventBridgeRuleTemplateGroup($args->toArray());
    }
}
