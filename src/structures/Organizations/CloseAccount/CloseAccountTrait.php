<?php

namespace Sunaoka\Aws\Structures\Organizations\CloseAccount;

trait CloseAccountTrait
{
    /**
     * @param CloseAccountRequest $args
     * @return void
     */
    public function closeAccount(CloseAccountRequest $args)
    {
        parent::closeAccount($args->toArray());
    }
}
