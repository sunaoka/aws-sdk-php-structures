<?php

namespace Sunaoka\Aws\Structures\Organizations\DisablePolicyType;

trait DisablePolicyTypeTrait
{
    /**
     * @param DisablePolicyTypeRequest $args
     * @return DisablePolicyTypeResponse
     */
    public function disablePolicyType(DisablePolicyTypeRequest $args)
    {
        $result = parent::disablePolicyType($args->toArray());
        return new DisablePolicyTypeResponse($result->toArray());
    }
}
