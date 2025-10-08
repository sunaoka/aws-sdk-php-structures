<?php

namespace Sunaoka\Aws\Structures\Emr\SetTerminationProtection;

trait SetTerminationProtectionTrait
{
    /**
     * @param SetTerminationProtectionRequest $args
     * @return void
     */
    public function setTerminationProtection(SetTerminationProtectionRequest $args)
    {
        parent::setTerminationProtection($args->toArray());
    }
}
