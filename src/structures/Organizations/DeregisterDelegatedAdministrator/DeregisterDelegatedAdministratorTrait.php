<?php

namespace Sunaoka\Aws\Structures\Organizations\DeregisterDelegatedAdministrator;

trait DeregisterDelegatedAdministratorTrait
{
    /**
     * @param DeregisterDelegatedAdministratorRequest $args
     * @return void
     */
    public function deregisterDelegatedAdministrator(DeregisterDelegatedAdministratorRequest $args)
    {
        parent::deregisterDelegatedAdministrator($args->toArray());
    }
}
