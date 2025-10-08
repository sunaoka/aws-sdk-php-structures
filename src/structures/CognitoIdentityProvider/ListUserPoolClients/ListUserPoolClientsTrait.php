<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPoolClients;

trait ListUserPoolClientsTrait
{
    /**
     * @param ListUserPoolClientsRequest $args
     * @return ListUserPoolClientsResponse
     */
    public function listUserPoolClients(ListUserPoolClientsRequest $args)
    {
        $result = parent::listUserPoolClients($args->toArray());
        return new ListUserPoolClientsResponse($result->toArray());
    }
}
