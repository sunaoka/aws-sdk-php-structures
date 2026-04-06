<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteEventBridgeRuleTemplate;

trait DeleteEventBridgeRuleTemplateTrait
{
    /**
     * @param DeleteEventBridgeRuleTemplateRequest $args
     * @return void
     */
    public function deleteEventBridgeRuleTemplate(DeleteEventBridgeRuleTemplateRequest $args)
    {
        parent::deleteEventBridgeRuleTemplate($args->toArray());
    }
}
