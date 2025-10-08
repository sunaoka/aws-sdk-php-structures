<?php

namespace Sunaoka\Aws\Structures\OAM\ListSinks;

trait ListSinksTrait
{
    /**
     * @param ListSinksRequest $args
     * @return ListSinksResponse
     */
    public function listSinks(ListSinksRequest $args)
    {
        $result = parent::listSinks($args->toArray());
        return new ListSinksResponse($result->toArray());
    }
}
