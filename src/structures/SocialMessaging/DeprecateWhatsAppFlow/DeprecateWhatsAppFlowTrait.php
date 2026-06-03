<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\DeprecateWhatsAppFlow;

trait DeprecateWhatsAppFlowTrait
{
    /**
     * @param DeprecateWhatsAppFlowRequest $args
     * @return DeprecateWhatsAppFlowResponse
     */
    public function deprecateWhatsAppFlow(DeprecateWhatsAppFlowRequest $args)
    {
        $result = parent::deprecateWhatsAppFlow($args->toArray());
        return new DeprecateWhatsAppFlowResponse($result->toArray());
    }
}
