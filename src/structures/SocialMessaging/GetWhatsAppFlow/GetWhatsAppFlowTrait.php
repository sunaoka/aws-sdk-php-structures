<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppFlow;

trait GetWhatsAppFlowTrait
{
    /**
     * @param GetWhatsAppFlowRequest $args
     * @return GetWhatsAppFlowResponse
     */
    public function getWhatsAppFlow(GetWhatsAppFlowRequest $args)
    {
        $result = parent::getWhatsAppFlow($args->toArray());
        return new GetWhatsAppFlowResponse($result->toArray());
    }
}
