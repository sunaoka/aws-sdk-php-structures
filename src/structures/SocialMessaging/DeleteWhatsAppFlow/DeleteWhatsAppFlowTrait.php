<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\DeleteWhatsAppFlow;

trait DeleteWhatsAppFlowTrait
{
    /**
     * @param DeleteWhatsAppFlowRequest $args
     * @return DeleteWhatsAppFlowResponse
     */
    public function deleteWhatsAppFlow(DeleteWhatsAppFlowRequest $args)
    {
        $result = parent::deleteWhatsAppFlow($args->toArray());
        return new DeleteWhatsAppFlowResponse($result->toArray());
    }
}
