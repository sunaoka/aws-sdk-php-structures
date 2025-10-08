<?php

namespace Sunaoka\Aws\Structures\CloudFormation\SetStackPolicy;

trait SetStackPolicyTrait
{
    /**
     * @param SetStackPolicyRequest $args
     * @return void
     */
    public function setStackPolicy(SetStackPolicyRequest $args)
    {
        parent::setStackPolicy($args->toArray());
    }
}
