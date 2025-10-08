<?php

namespace Sunaoka\Aws\Structures\MediaLive\GetEventBridgeRuleTemplate;

trait GetEventBridgeRuleTemplateTrait
{
    /**
     * @param GetEventBridgeRuleTemplateRequest $args
     * @return GetEventBridgeRuleTemplateResponse
     */
    public function getEventBridgeRuleTemplate(GetEventBridgeRuleTemplateRequest $args)
    {
        $result = parent::getEventBridgeRuleTemplate($args->toArray());
        return new GetEventBridgeRuleTemplateResponse($result->toArray());
    }
}
