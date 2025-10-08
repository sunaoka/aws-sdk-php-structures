<?php

namespace Sunaoka\Aws\Structures\Iam\ListPoliciesGrantingServiceAccess;

trait ListPoliciesGrantingServiceAccessTrait
{
    /**
     * @param ListPoliciesGrantingServiceAccessRequest $args
     * @return ListPoliciesGrantingServiceAccessResponse
     */
    public function listPoliciesGrantingServiceAccess(ListPoliciesGrantingServiceAccessRequest $args)
    {
        $result = parent::listPoliciesGrantingServiceAccess($args->toArray());
        return new ListPoliciesGrantingServiceAccessResponse($result->toArray());
    }
}
