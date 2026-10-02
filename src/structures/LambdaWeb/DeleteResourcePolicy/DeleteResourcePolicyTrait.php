<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\DeleteResourcePolicy;

trait DeleteResourcePolicyTrait
{
    /**
     * @param DeleteResourcePolicyRequest $args
     * @return void
     */
    public function deleteResourcePolicy(DeleteResourcePolicyRequest $args)
    {
        parent::deleteResourcePolicy($args->toArray());
    }
}
