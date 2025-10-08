<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyAccount;

trait ModifyAccountTrait
{
    /**
     * @param ModifyAccountRequest $args
     * @return ModifyAccountResponse
     */
    public function modifyAccount(ModifyAccountRequest $args)
    {
        $result = parent::modifyAccount($args->toArray());
        return new ModifyAccountResponse($result->toArray());
    }
}
