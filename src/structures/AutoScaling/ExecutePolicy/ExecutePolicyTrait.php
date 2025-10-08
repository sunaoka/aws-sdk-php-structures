<?php

namespace Sunaoka\Aws\Structures\AutoScaling\ExecutePolicy;

trait ExecutePolicyTrait
{
    /**
     * @param ExecutePolicyRequest $args
     * @return void
     */
    public function executePolicy(ExecutePolicyRequest $args)
    {
        parent::executePolicy($args->toArray());
    }
}
