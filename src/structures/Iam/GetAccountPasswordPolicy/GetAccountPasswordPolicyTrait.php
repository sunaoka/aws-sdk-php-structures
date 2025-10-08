<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountPasswordPolicy;

trait GetAccountPasswordPolicyTrait
{
    /**
     * @return GetAccountPasswordPolicyResponse
     */
    public function getAccountPasswordPolicy()
    {
        $result = parent::getAccountPasswordPolicy();
        return new GetAccountPasswordPolicyResponse($result->toArray());
    }
}
