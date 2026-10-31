<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteAccountPolicy;

trait DeleteAccountPolicyTrait
{
    /**
     * @param DeleteAccountPolicyRequest $args
     * @return DeleteAccountPolicyResponse
     */
    public function deleteAccountPolicy(DeleteAccountPolicyRequest $args)
    {
        $result = parent::deleteAccountPolicy($args->toArray());
        return new DeleteAccountPolicyResponse($result->toArray());
    }
}
