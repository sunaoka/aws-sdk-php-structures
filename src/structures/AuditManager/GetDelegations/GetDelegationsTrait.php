<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetDelegations;

trait GetDelegationsTrait
{
    /**
     * @param GetDelegationsRequest $args
     * @return GetDelegationsResponse
     */
    public function getDelegations(GetDelegationsRequest $args)
    {
        $result = parent::getDelegations($args->toArray());
        return new GetDelegationsResponse($result->toArray());
    }
}
