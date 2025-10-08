<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQueueOutboundEmailConfig;

trait UpdateQueueOutboundEmailConfigTrait
{
    /**
     * @param UpdateQueueOutboundEmailConfigRequest $args
     * @return void
     */
    public function updateQueueOutboundEmailConfig(UpdateQueueOutboundEmailConfigRequest $args)
    {
        parent::updateQueueOutboundEmailConfig($args->toArray());
    }
}
