<?php

namespace Sunaoka\Aws\Structures\Organizations\RegisterDelegatedAdministrator;

trait RegisterDelegatedAdministratorTrait
{
    /**
     * @param RegisterDelegatedAdministratorRequest $args
     * @return void
     */
    public function registerDelegatedAdministrator(RegisterDelegatedAdministratorRequest $args)
    {
        parent::registerDelegatedAdministrator($args->toArray());
    }
}
