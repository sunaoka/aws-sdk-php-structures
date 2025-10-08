<?php

namespace Sunaoka\Aws\Structures\Organizations\MoveAccount;

trait MoveAccountTrait
{
    /**
     * @param MoveAccountRequest $args
     * @return void
     */
    public function moveAccount(MoveAccountRequest $args)
    {
        parent::moveAccount($args->toArray());
    }
}
