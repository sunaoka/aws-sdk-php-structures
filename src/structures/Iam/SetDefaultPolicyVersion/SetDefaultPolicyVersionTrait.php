<?php

namespace Sunaoka\Aws\Structures\Iam\SetDefaultPolicyVersion;

trait SetDefaultPolicyVersionTrait
{
    /**
     * @param SetDefaultPolicyVersionRequest $args
     * @return void
     */
    public function setDefaultPolicyVersion(SetDefaultPolicyVersionRequest $args)
    {
        parent::setDefaultPolicyVersion($args->toArray());
    }
}
