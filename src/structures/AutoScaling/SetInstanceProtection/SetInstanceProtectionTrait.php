<?php

namespace Sunaoka\Aws\Structures\AutoScaling\SetInstanceProtection;

trait SetInstanceProtectionTrait
{
    /**
     * @param SetInstanceProtectionRequest $args
     * @return SetInstanceProtectionResponse
     */
    public function setInstanceProtection(SetInstanceProtectionRequest $args)
    {
        $result = parent::setInstanceProtection($args->toArray());
        return new SetInstanceProtectionResponse($result->toArray());
    }
}
