<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPaymentManager;

trait GetPaymentManagerTrait
{
    /**
     * @param GetPaymentManagerRequest $args
     * @return GetPaymentManagerResponse
     */
    public function getPaymentManager(GetPaymentManagerRequest $args)
    {
        $result = parent::getPaymentManager($args->toArray());
        return new GetPaymentManagerResponse($result->toArray());
    }
}
