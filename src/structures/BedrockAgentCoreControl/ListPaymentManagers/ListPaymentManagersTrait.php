<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPaymentManagers;

trait ListPaymentManagersTrait
{
    /**
     * @param ListPaymentManagersRequest $args
     * @return ListPaymentManagersResponse
     */
    public function listPaymentManagers(ListPaymentManagersRequest $args)
    {
        $result = parent::listPaymentManagers($args->toArray());
        return new ListPaymentManagersResponse($result->toArray());
    }
}
