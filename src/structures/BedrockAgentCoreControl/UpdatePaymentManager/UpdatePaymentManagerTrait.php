<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentManager;

trait UpdatePaymentManagerTrait
{
    /**
     * @param UpdatePaymentManagerRequest $args
     * @return UpdatePaymentManagerResponse
     */
    public function updatePaymentManager(UpdatePaymentManagerRequest $args)
    {
        $result = parent::updatePaymentManager($args->toArray());
        return new UpdatePaymentManagerResponse($result->toArray());
    }
}
