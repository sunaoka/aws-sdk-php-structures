<?php

namespace Sunaoka\Aws\Structures\CloudHsm\ListLunaClients;

trait ListLunaClientsTrait
{
    /**
     * @param ListLunaClientsRequest $args
     * @return ListLunaClientsResponse
     */
    public function listLunaClients(ListLunaClientsRequest $args)
    {
        $result = parent::listLunaClients($args->toArray());
        return new ListLunaClientsResponse($result->toArray());
    }
}
