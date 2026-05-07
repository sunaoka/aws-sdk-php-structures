<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeletePaymentManager;

trait DeletePaymentManagerTrait
{
    /**
     * @param DeletePaymentManagerRequest $args
     * @return DeletePaymentManagerResponse
     */
    public function deletePaymentManager(DeletePaymentManagerRequest $args)
    {
        $result = parent::deletePaymentManager($args->toArray());
        return new DeletePaymentManagerResponse($result->toArray());
    }
}
