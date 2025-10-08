<?php

namespace Sunaoka\Aws\Structures\Iot\DeletePolicyVersion;

trait DeletePolicyVersionTrait
{
    /**
     * @param DeletePolicyVersionRequest $args
     * @return void
     */
    public function deletePolicyVersion(DeletePolicyVersionRequest $args)
    {
        parent::deletePolicyVersion($args->toArray());
    }
}
