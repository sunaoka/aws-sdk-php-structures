<?php

namespace Sunaoka\Aws\Structures\DataZone\RemovePolicyGrant;

trait RemovePolicyGrantTrait
{
    /**
     * @param RemovePolicyGrantRequest $args
     * @return RemovePolicyGrantResponse
     */
    public function removePolicyGrant(RemovePolicyGrantRequest $args)
    {
        $result = parent::removePolicyGrant($args->toArray());
        return new RemovePolicyGrantResponse($result->toArray());
    }
}
