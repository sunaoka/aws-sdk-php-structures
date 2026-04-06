<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListEventBridgeRuleTemplateGroups;

trait ListEventBridgeRuleTemplateGroupsTrait
{
    /**
     * @param ListEventBridgeRuleTemplateGroupsRequest $args
     * @return ListEventBridgeRuleTemplateGroupsResponse
     */
    public function listEventBridgeRuleTemplateGroups(ListEventBridgeRuleTemplateGroupsRequest $args)
    {
        $result = parent::listEventBridgeRuleTemplateGroups($args->toArray());
        return new ListEventBridgeRuleTemplateGroupsResponse($result->toArray());
    }
}
