<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\ListStreamSessionsByAccount;

trait ListStreamSessionsByAccountTrait
{
    /**
     * @param ListStreamSessionsByAccountRequest $args
     * @return ListStreamSessionsByAccountResponse
     */
    public function listStreamSessionsByAccount(ListStreamSessionsByAccountRequest $args)
    {
        $result = parent::listStreamSessionsByAccount($args->toArray());
        return new ListStreamSessionsByAccountResponse($result->toArray());
    }
}
