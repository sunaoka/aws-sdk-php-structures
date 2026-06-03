<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\CreateWhatsAppFlow;

trait CreateWhatsAppFlowTrait
{
    /**
     * @param CreateWhatsAppFlowRequest $args
     * @return CreateWhatsAppFlowResponse
     */
    public function createWhatsAppFlow(CreateWhatsAppFlowRequest $args)
    {
        $result = parent::createWhatsAppFlow($args->toArray());
        return new CreateWhatsAppFlowResponse($result->toArray());
    }
}
