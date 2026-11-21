<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListPrincipalsForPolicy;

trait ListPrincipalsForPolicyTrait
{
    /**
     * @param ListPrincipalsForPolicyRequest $args
     * @return ListPrincipalsForPolicyResponse
     */
    public function listPrincipalsForPolicy(ListPrincipalsForPolicyRequest $args)
    {
        $result = parent::listPrincipalsForPolicy($args->toArray());
        return new ListPrincipalsForPolicyResponse($result->toArray());
    }
}
