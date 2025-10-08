<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeregisterDataLakeDelegatedAdministrator;

trait DeregisterDataLakeDelegatedAdministratorTrait
{
    /**
     * @param DeregisterDataLakeDelegatedAdministratorRequest $args
     * @return DeregisterDataLakeDelegatedAdministratorResponse
     */
    public function deregisterDataLakeDelegatedAdministrator(DeregisterDataLakeDelegatedAdministratorRequest $args)
    {
        $result = parent::deregisterDataLakeDelegatedAdministrator($args->toArray());
        return new DeregisterDataLakeDelegatedAdministratorResponse($result->toArray());
    }
}
