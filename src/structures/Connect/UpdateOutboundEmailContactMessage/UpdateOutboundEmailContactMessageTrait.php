<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateOutboundEmailContactMessage;

trait UpdateOutboundEmailContactMessageTrait
{
    /**
     * @param UpdateOutboundEmailContactMessageRequest $args
     * @return UpdateOutboundEmailContactMessageResponse
     */
    public function updateOutboundEmailContactMessage(UpdateOutboundEmailContactMessageRequest $args)
    {
        $result = parent::updateOutboundEmailContactMessage($args->toArray());
        return new UpdateOutboundEmailContactMessageResponse($result->toArray());
    }
}
