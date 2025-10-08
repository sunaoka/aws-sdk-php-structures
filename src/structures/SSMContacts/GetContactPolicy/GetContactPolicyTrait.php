<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetContactPolicy;

trait GetContactPolicyTrait
{
    /**
     * @param GetContactPolicyRequest $args
     * @return GetContactPolicyResponse
     */
    public function getContactPolicy(GetContactPolicyRequest $args)
    {
        $result = parent::getContactPolicy($args->toArray());
        return new GetContactPolicyResponse($result->toArray());
    }
}
