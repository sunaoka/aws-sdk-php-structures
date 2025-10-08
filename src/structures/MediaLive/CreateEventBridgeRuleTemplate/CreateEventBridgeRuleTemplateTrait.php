<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateEventBridgeRuleTemplate;

trait CreateEventBridgeRuleTemplateTrait
{
    /**
     * @param CreateEventBridgeRuleTemplateRequest $args
     * @return CreateEventBridgeRuleTemplateResponse
     */
    public function createEventBridgeRuleTemplate(CreateEventBridgeRuleTemplateRequest $args)
    {
        $result = parent::createEventBridgeRuleTemplate($args->toArray());
        return new CreateEventBridgeRuleTemplateResponse($result->toArray());
    }
}
