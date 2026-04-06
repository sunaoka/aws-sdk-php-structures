<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListEventBridgeRuleTemplates;

trait ListEventBridgeRuleTemplatesTrait
{
    /**
     * @param ListEventBridgeRuleTemplatesRequest $args
     * @return ListEventBridgeRuleTemplatesResponse
     */
    public function listEventBridgeRuleTemplates(ListEventBridgeRuleTemplatesRequest $args)
    {
        $result = parent::listEventBridgeRuleTemplates($args->toArray());
        return new ListEventBridgeRuleTemplatesResponse($result->toArray());
    }
}
