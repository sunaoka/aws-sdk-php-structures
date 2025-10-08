<?php

namespace Sunaoka\Aws\Structures\Organizations\ListAccountsForParent;

trait ListAccountsForParentTrait
{
    /**
     * @param ListAccountsForParentRequest $args
     * @return ListAccountsForParentResponse
     */
    public function listAccountsForParent(ListAccountsForParentRequest $args)
    {
        $result = parent::listAccountsForParent($args->toArray());
        return new ListAccountsForParentResponse($result->toArray());
    }
}
