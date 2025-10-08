<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAccountsInAccountPool;

trait ListAccountsInAccountPoolTrait
{
    /**
     * @param ListAccountsInAccountPoolRequest $args
     * @return ListAccountsInAccountPoolResponse
     */
    public function listAccountsInAccountPool(ListAccountsInAccountPoolRequest $args)
    {
        $result = parent::listAccountsInAccountPool($args->toArray());
        return new ListAccountsInAccountPoolResponse($result->toArray());
    }
}
