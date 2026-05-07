<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePaymentManager;

trait CreatePaymentManagerTrait
{
    /**
     * @param CreatePaymentManagerRequest $args
     * @return CreatePaymentManagerResponse
     */
    public function createPaymentManager(CreatePaymentManagerRequest $args)
    {
        $result = parent::createPaymentManager($args->toArray());
        return new CreatePaymentManagerResponse($result->toArray());
    }
}
