<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteDataProtectionPolicy;

trait DeleteDataProtectionPolicyTrait
{
    /**
     * @param DeleteDataProtectionPolicyRequest $args
     * @return void
     */
    public function deleteDataProtectionPolicy(DeleteDataProtectionPolicyRequest $args)
    {
        parent::deleteDataProtectionPolicy($args->toArray());
    }
}
