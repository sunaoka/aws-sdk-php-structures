<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\UpdateWhatsAppFlow;

trait UpdateWhatsAppFlowTrait
{
    /**
     * @param UpdateWhatsAppFlowRequest $args
     * @return UpdateWhatsAppFlowResponse
     */
    public function updateWhatsAppFlow(UpdateWhatsAppFlowRequest $args)
    {
        $result = parent::updateWhatsAppFlow($args->toArray());
        return new UpdateWhatsAppFlowResponse($result->toArray());
    }
}
