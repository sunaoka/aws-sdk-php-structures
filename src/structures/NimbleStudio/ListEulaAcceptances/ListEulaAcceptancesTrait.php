<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListEulaAcceptances;

trait ListEulaAcceptancesTrait
{
    /**
     * @param ListEulaAcceptancesRequest $args
     * @return ListEulaAcceptancesResponse
     */
    public function listEulaAcceptances(ListEulaAcceptancesRequest $args)
    {
        $result = parent::listEulaAcceptances($args->toArray());
        return new ListEulaAcceptancesResponse($result->toArray());
    }
}
