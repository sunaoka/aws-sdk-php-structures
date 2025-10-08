<?php

namespace Sunaoka\Aws\Structures\DataZone\AddPolicyGrant;

trait AddPolicyGrantTrait
{
    /**
     * @param AddPolicyGrantRequest $args
     * @return AddPolicyGrantResponse
     */
    public function addPolicyGrant(AddPolicyGrantRequest $args)
    {
        $result = parent::addPolicyGrant($args->toArray());
        return new AddPolicyGrantResponse($result->toArray());
    }
}
