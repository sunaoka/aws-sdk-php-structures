<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQueueOutboundCallerConfig;

trait UpdateQueueOutboundCallerConfigTrait
{
    /**
     * @param UpdateQueueOutboundCallerConfigRequest $args
     * @return void
     */
    public function updateQueueOutboundCallerConfig(UpdateQueueOutboundCallerConfigRequest $args)
    {
        parent::updateQueueOutboundCallerConfig($args->toArray());
    }
}
