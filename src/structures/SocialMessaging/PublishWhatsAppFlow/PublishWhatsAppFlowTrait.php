<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\PublishWhatsAppFlow;

trait PublishWhatsAppFlowTrait
{
    /**
     * @param PublishWhatsAppFlowRequest $args
     * @return PublishWhatsAppFlowResponse
     */
    public function publishWhatsAppFlow(PublishWhatsAppFlowRequest $args)
    {
        $result = parent::publishWhatsAppFlow($args->toArray());
        return new PublishWhatsAppFlowResponse($result->toArray());
    }
}
