<?php

namespace Sunaoka\Aws\Structures\Iot\DeletePolicy;

trait DeletePolicyTrait
{
    /**
     * @param DeletePolicyRequest $args
     * @return void
     */
    public function deletePolicy(DeletePolicyRequest $args)
    {
        parent::deletePolicy($args->toArray());
    }
}
