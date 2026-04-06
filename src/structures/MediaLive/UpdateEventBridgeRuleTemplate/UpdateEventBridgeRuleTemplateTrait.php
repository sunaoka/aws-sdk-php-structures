<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateEventBridgeRuleTemplate;

trait UpdateEventBridgeRuleTemplateTrait
{
    /**
     * @param UpdateEventBridgeRuleTemplateRequest $args
     * @return UpdateEventBridgeRuleTemplateResponse
     */
    public function updateEventBridgeRuleTemplate(UpdateEventBridgeRuleTemplateRequest $args)
    {
        $result = parent::updateEventBridgeRuleTemplate($args->toArray());
        return new UpdateEventBridgeRuleTemplateResponse($result->toArray());
    }
}
