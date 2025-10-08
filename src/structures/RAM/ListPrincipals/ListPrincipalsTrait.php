<?php

namespace Sunaoka\Aws\Structures\RAM\ListPrincipals;

trait ListPrincipalsTrait
{
    /**
     * @param ListPrincipalsRequest $args
     * @return ListPrincipalsResponse
     */
    public function listPrincipals(ListPrincipalsRequest $args)
    {
        $result = parent::listPrincipals($args->toArray());
        return new ListPrincipalsResponse($result->toArray());
    }
}
