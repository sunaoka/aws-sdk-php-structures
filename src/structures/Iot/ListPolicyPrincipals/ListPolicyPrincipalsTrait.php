<?php

namespace Sunaoka\Aws\Structures\Iot\ListPolicyPrincipals;

trait ListPolicyPrincipalsTrait
{
    /**
     * @param ListPolicyPrincipalsRequest $args
     * @return ListPolicyPrincipalsResponse
     */
    public function listPolicyPrincipals(ListPolicyPrincipalsRequest $args)
    {
        $result = parent::listPolicyPrincipals($args->toArray());
        return new ListPolicyPrincipalsResponse($result->toArray());
    }
}
