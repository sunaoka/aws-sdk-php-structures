<?php

namespace Sunaoka\Aws\Structures\MailManager\ListRelays;

trait ListRelaysTrait
{
    /**
     * @param ListRelaysRequest $args
     * @return ListRelaysResponse
     */
    public function listRelays(ListRelaysRequest $args)
    {
        $result = parent::listRelays($args->toArray());
        return new ListRelaysResponse($result->toArray());
    }
}
