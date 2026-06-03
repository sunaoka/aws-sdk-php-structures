<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListWhatsAppFlows;

trait ListWhatsAppFlowsTrait
{
    /**
     * @param ListWhatsAppFlowsRequest $args
     * @return ListWhatsAppFlowsResponse
     */
    public function listWhatsAppFlows(ListWhatsAppFlowsRequest $args)
    {
        $result = parent::listWhatsAppFlows($args->toArray());
        return new ListWhatsAppFlowsResponse($result->toArray());
    }
}
