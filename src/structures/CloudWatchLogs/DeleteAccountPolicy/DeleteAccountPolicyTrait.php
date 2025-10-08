<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteAccountPolicy;

trait DeleteAccountPolicyTrait
{
    /**
     * @param DeleteAccountPolicyRequest $args
     * @return void
     */
    public function deleteAccountPolicy(DeleteAccountPolicyRequest $args)
    {
        parent::deleteAccountPolicy($args->toArray());
    }
}
