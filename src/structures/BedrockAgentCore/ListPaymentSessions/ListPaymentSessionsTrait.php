<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListPaymentSessions;

trait ListPaymentSessionsTrait
{
    /**
     * @param ListPaymentSessionsRequest $args
     * @return ListPaymentSessionsResponse
     */
    public function listPaymentSessions(ListPaymentSessionsRequest $args)
    {
        $result = parent::listPaymentSessions($args->toArray());
        return new ListPaymentSessionsResponse($result->toArray());
    }
}
