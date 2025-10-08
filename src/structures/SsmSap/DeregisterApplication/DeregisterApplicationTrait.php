<?php

namespace Sunaoka\Aws\Structures\SsmSap\DeregisterApplication;

trait DeregisterApplicationTrait
{
    /**
     * @param DeregisterApplicationRequest $args
     * @return DeregisterApplicationResponse
     */
    public function deregisterApplication(DeregisterApplicationRequest $args)
    {
        $result = parent::deregisterApplication($args->toArray());
        return new DeregisterApplicationResponse($result->toArray());
    }
}
