<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DeletePolicy;

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
