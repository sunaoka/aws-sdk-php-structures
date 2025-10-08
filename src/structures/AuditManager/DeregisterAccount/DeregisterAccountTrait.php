<?php

namespace Sunaoka\Aws\Structures\AuditManager\DeregisterAccount;

trait DeregisterAccountTrait
{
    /**
     * @param DeregisterAccountRequest $args
     * @return DeregisterAccountResponse
     */
    public function deregisterAccount(DeregisterAccountRequest $args)
    {
        $result = parent::deregisterAccount($args->toArray());
        return new DeregisterAccountResponse($result->toArray());
    }
}
