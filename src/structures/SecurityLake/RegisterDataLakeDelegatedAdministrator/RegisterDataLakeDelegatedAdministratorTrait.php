<?php

namespace Sunaoka\Aws\Structures\SecurityLake\RegisterDataLakeDelegatedAdministrator;

trait RegisterDataLakeDelegatedAdministratorTrait
{
    /**
     * @param RegisterDataLakeDelegatedAdministratorRequest $args
     * @return RegisterDataLakeDelegatedAdministratorResponse
     */
    public function registerDataLakeDelegatedAdministrator(RegisterDataLakeDelegatedAdministratorRequest $args)
    {
        $result = parent::registerDataLakeDelegatedAdministrator($args->toArray());
        return new RegisterDataLakeDelegatedAdministratorResponse($result->toArray());
    }
}
